<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\UserStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\BecomeInstructorStoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Modules\InstructorRequest\app\Models\InstructorRequest;
use Modules\InstructorRequest\app\Models\InstructorRequestSetting;
use Modules\PaymentWithdraw\app\Models\WithdrawMethod;
use Modules\Course\app\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BecomeInstructorController extends Controller
{
    public function index(Request $request): View|RedirectResponse
    {
        if ($this->checkIfApproveInstructor()) {
            return to_route('instructor.dashboard');
        }

        $user = Auth::user();
        $instructorRequestSetting = InstructorRequestSetting::first();
        $withdrawMethods = WithdrawMethod::where('status', 'active')->get();

        $query = CourseCategory::query();
        $query->when($request->keyword, function ($q) {
            $q->whereHas('translations', function ($q) {
                $q->where('name', 'like', '%' . request('keyword') . '%');
            });
        });
        $query->where('parent_id', $request->parent_id);
        $query->when(
            $request->status !== null && $request->status !== '',
            fn ($q) => $q->where('status', $request->status)
        );
        $orderBy = $request->order_by == 1 ? 'asc' : 'desc';
        $schoolLevels = \App\Models\SchoolLevel::where('status', 1)->get();

        $categories = $request->get('par-page') == 'all' ?
            $query->orderBy('id', $orderBy)->get() :
            $query->orderBy('id', $orderBy)->paginate($request->get('par-page') ?? null)->withQueryString();

        return view('frontend.pages.become-instructor', compact('user', 'withdrawMethods', 'instructorRequestSetting', 'categories', 'schoolLevels'));
    }

    public function store(BecomeInstructorStoreRequest $request): RedirectResponse
    {
        $instructorRequest = InstructorRequest::updateOrCreate(
            ['user_id' => auth('web')->user()->id],
            [
                'status' => 'pending',
                'payout_account' => $request->payout_account,
                'payout_information' => $request->payout_information,
                'extra_information' => $request->extra_information,
                'name' => $request->name,
                'phone' => $request->phone,
                'city' => $request->city
            ]
        );

        // Sync categories
        if ($request->has('category')) {
            $instructorRequest->categories()->sync($request->category);
        }

        // Sync school levels
        if ($request->has('school_level')) {
            $instructorRequest->schoolLevels()->sync($request->school_level);
        }

        // Upload and save certificate if provided
        if ($request->has('certificate')) {
            $filePath = file_upload($request->certificate);
            $instructorRequest->certificate = $filePath;
        }

        // Upload and save identity scan if provided
        if ($request->has('identity_scan')) {
            $filePath = file_upload($request->identity_scan);
            $instructorRequest->identity_scan = $filePath;
        }

        $instructorRequest->save();

        return redirect()->route('student.dashboard')->with([
            'success' => __('Instructor request submitted successfully; we will notify you when your account is approved'),
            'alert-type' => 'success'
        ]);
    }

    private function checkIfApproveInstructor(): bool
    {
        return instructorStatus() == UserStatus::APPROVED->value;
    }
}
