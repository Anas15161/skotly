<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CoursSoutienController extends Controller
{
    // Méthode pour afficher la page d'accueil des cours de soutien
    public function index()
    {
        // Logique pour récupérer les données générales ou afficher la vue d'accueil
        return view('frontend.pages.index');
    }

    // Méthode pour afficher la page des cours de soutien pour le primaire
    public function primaire()
    {
        $matieres = \App\Models\CourseCategoryTranslation::where('lang_code', 'fr')
        ->where('course_category_id', '>', 43)
        ->get();
        $cycles = \App\Models\Cycle::with('schoolLevel')->get();
        return view('frontend.pages.primaire',compact("cycles","matieres"));
    }

    // Méthode pour afficher la page des cours de soutien pour le collège
    public function collège()
    {
        // Logique pour récupérer les données spécifiques au collège
        return view('frontend.pages.college');
    }

    // Méthode pour afficher la page des cours de soutien pour le lycée
    public function lycée()
    {
        // Logique pour récupérer les données spécifiques au lycée
        return view('frontend.pages.lycee');
    }
}
