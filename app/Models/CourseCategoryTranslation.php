<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Course\app\Models\CourseCategory;
class CourseCategoryTranslation extends Model
{
    use HasFactory;

    // Nom de la table (par défaut Laravel utilise le pluriel du nom du modèle)
    protected $table = 'course_category_translations';

    // Colonnes qui peuvent être massivement assignées
    protected $fillable = [
        'course_category_id',
        'lang_code',
        'name',
    ];

    // Relation avec le modèle CourseCategory (si nécessaire)
    public function courseCategory()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class);
    }
}
