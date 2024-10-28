<?php

namespace Modules\InstructorRequest\app\Models;

use App\Models\SchoolLevel;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\belongsToMany ;
// use Illuminate\Database\Eloquent\Relations\hasOne;
use Modules\Course\app\Models\CourseCategory;
use Modules\InstructorRequest\Database\factories\InstructorRequestFactory;

class InstructorRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'instructor_requests';
    protected $fillable = [
        'user_id',
        'status',
        'payout_account',
        'payout_information',
        'certificate',
        'identity_scan',
        'extra_information',
        'city',
        'phone'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function schoolLevels(): belongsToMany
    {
        return $this->belongsToMany(SchoolLevel::class, 'instructor_request_school_level');
    }

    public function categories(): belongsToMany
    {
        return $this->belongsToMany(CourseCategory::class, 'category_instructor_request', 'instructor_request_id', 'course_category_id');
    }
}
