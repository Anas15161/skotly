<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\InstructorRequest\app\Models\InstructorRequest;
class SchoolLevel extends Model
{
    use HasFactory;

    // Define the table name (if it's different from the default "school_levels")
    protected $table = 'school levels';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'slug',
        'status',
    ];
    public function cycles()
    {
        return $this->hasMany(Cycle::class, 'school_level_id');
    }
    // Define any relationships if necessary (e.g., if school levels have related models)
    // For example:
    // public function courses() {
    //     return $this->hasMany(Course::class);
    // }
    public function instructorRequests(): BelongsToMany
    {
        return $this->belongsToMany(InstructorRequest::class, 'instructor_request_school_level', 'school_level_id', 'instructor_request_id');
    }
}
