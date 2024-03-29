<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;

    public function user(): BelongsTo {
        return $this -> belongsTo(User::class);
    }


    public function clientwishlists(): HasMany {
        return $this -> hasMany(ClientWishlist::class);
    }

    public function clientvendorbookings(): HasMany {
        return $this -> hasMany(ClientVendorBooking::class);
    }

    public function clienteventplanners(): HasMany {
        return $this -> hasMany(ClientEventPlanner::class);
    }

    public function clientguestlists(): HasMany {
        return $this -> hasMany(ClientGuestList::class);
    }

    public function clientchecklists(): HasMany {
        return $this -> hasMany(ClientChecklist::class);
    }

    public function clientbudgets(): HasMany {
        return $this -> hasMany(ClientBudget::class);
    }

    public function clientcapital(): HasOne {
        return $this -> hasOne(clientCapital::class);
    }

    public function reviews(): HasMany {
        return $this -> hasMany(Review::class);
    }


    protected $casts = [
        'c_tpno' => 'array',
    ];
}
