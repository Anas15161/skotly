<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Cycle;
use App\Models\CourseCategoryTranslation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Affiche la liste des réservations dans l'admin
    public function index()
    {
        // Récupère toutes les réservations avec les cycles et matières associés
        $reservations = Reservation::with(['cycles', 'matieres'])->paginate(10);

        return view('admin.reservations.index', compact('reservations'));
    }

    // Affiche les détails d'une réservation spécifique
    public function show($id)
    {
        // Trouve la réservation par ID avec ses cycles et matières associés
        $reservation = Reservation::with(['cycles', 'matieres'])->findOrFail($id);

        return view('admin.reservations.edit', compact('reservation'));
    }

    // Enregistre une nouvelle réservation depuis le formulaire de l'interface frontend
    public function store(Request $request)
    {
        // Valide les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'cycle' => 'required|array',
            'cycle.*' => 'exists:cycles,id',
            'matieres' => 'nullable|array',
            'matieres.*' => 'exists:matieres,id',
        ]);

        // Crée une nouvelle réservation
        $reservation = Reservation::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);

        // Associe les cycles sélectionnés
        $reservation->cycles()->attach($validatedData['cycle']);

        // Associe les matières sélectionnées si présentes
        if (!empty($validatedData['matieres'])) {
            $reservation->matieres()->attach($validatedData['matieres']);
        }

        // Redirige l'utilisateur avec un message de succès
        return redirect()->route('frontend.pages.index')->with('success', 'Votre réservation a été soumise avec succès !');
    }
    public function destroy($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->delete();

    return redirect()->route('admin.reservations.index')->with('success', 'Réservation supprimée avec succès');
}
// public function show(Reservation $reservation)
// {
//     // Load related cycles and matieres
//     $reservation->load('cycles', 'matieres');

//     return view('admin.reservations.show', compact('reservation'));
// }
public function update(Request $request, Reservation $reservation)
{
    $request->validate([
        'status' => 'required|string|in:pending,approved,rejected',
    ]);

    // Update the reservation status
    $reservation->status = $request->input('status');
    $reservation->save();

    return redirect()->route('admin.reservations.show', $reservation->id)
                     ->with('success', 'Reservation status updated successfully.');
}
}
