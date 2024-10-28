<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cycle;
use App\Models\Matiere;
use App\Models\Reservation;
use App\Models\CourseCategoryTranslation;

class CoursSoutienController extends Controller
{
    // Méthode pour afficher la page d'accueil des cours de soutien
    public function index()
    {
        $matieres = CourseCategoryTranslation::where('lang_code', 'fr')
        ->where('course_category_id', '>', 43)
        ->get();
    $cycles = Cycle::with('schoolLevel')->get();
        return view('frontend.pages.index', compact("cycles", "matieres"));
    }

    // Méthode pour afficher la page des cours de soutien pour le primaire
    public function primaire()
    {
        $matieres = CourseCategoryTranslation::where('lang_code', 'fr')
            ->where('course_category_id', '>', 43)
            ->get();
        $cycles = Cycle::with('schoolLevel')->get();
        return view('frontend.pages.primaire', compact("cycles", "matieres"));
    }

    // Méthode pour afficher la page des cours de soutien pour le collège
    public function college()
    {
        $matieres = CourseCategoryTranslation::where('lang_code', 'fr')
            ->where('course_category_id', '>', 43)
            ->get();
        $cycles = Cycle::with('schoolLevel')->get();
        return view('frontend.pages.college', compact("cycles", "matieres"));
    }

    // Méthode pour afficher la page des cours de soutien pour le lycée
    public function lycee()
    {
        $matieres = CourseCategoryTranslation::where('lang_code', 'fr')
            ->where('course_category_id', '>', 43)
            ->get();
        $cycles = Cycle::with('schoolLevel')->get();
        return view('frontend.pages.lycee', compact("cycles", "matieres"));
    }

    // Méthode pour stocker la réservation
    public function storeReservation(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'cycle' => 'required|array',
            'matieres' => 'nullable|array',
        ]);

        // Création de la réservation
        $reservation = Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // Associer les cycles et matières
        $reservation->cycles()->attach($request->cycle);
        if ($request->matieres) {
            $reservation->matieres()->attach($request->matieres);
        }

        // Redirection vers le tableau de bord admin avec un message de succès
        return redirect()->route('courssoutien')->with('success', 'Réservation enregistrée avec succès');
    }
}
