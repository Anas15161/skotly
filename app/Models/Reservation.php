<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    public function cycles()
    {
        return $this->belongsToMany(Cycle::class, 'cycle_reservation', 'reservation_id', 'cycle_id');
    }

    public function matieres()
    {
        return $this->belongsToMany(CourseCategoryTranslation::class, 'matiere_reservation', 'reservation_id', 'matiere_id');
    }
}
