<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationsRequest extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'reservations_request';

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'status',  // Add status field here
    ];

    /**
     * Status options
     */
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    /**
     * Scope a query to only include approved reservations.
     */
    public function scopeApproved($query)
    {
        return $query->where('status', self::STATUS_APPROVED);
    }

    /**
     * Scope a query to only include pending reservations.
     */
    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    /**
     * Scope a query to only include rejected reservations.
     */
    public function scopeRejected($query)
    {
        return $query->where('status', self::STATUS_REJECTED);
    }

    /**
     * Update the reservation status
     */
    public function updateStatus($newStatus)
    {
        $this->status = $newStatus;
        $this->save();
    }
}
