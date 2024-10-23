<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    // Nom de la table (par défaut Laravel utilise le pluriel du nom du modèle)
    protected $table = 'course_categories';

    // Colonnes qui peuvent être massivement assignées
    protected $fillable = [
        'slug',
        'order',
        'icon',
        'parent_id',
        'show_at_trending',
        'status',
    ];

    // Relation avec les traductions (CourseCategoryTranslation)
    public function translations()
    {
        return $this->hasMany(CourseCategoryTranslation::class, 'course_category_id');
    }

    // Relation parent/enfant pour les sous-catégories
    public function parent()
    {
        return $this->belongsTo(CourseCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(CourseCategory::class, 'parent_id');
    }
}
