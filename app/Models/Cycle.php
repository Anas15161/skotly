<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Cycle extends Model
{
    use HasFactory;

    protected $table = 'cycles';
    // Colonnes remplissables
    protected $fillable = ['name', 'age_range', 'duration', 'description', 'school_level_id'];

    // Relation avec le modèle SchoolLevel (si existant)
    public function schoolLevel()
    {
        return $this->belongsTo(SchoolLevel::class, 'school_level_id');
    }
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'cycle_reservation', 'cycle_id', 'reservation_id');
    }
}
