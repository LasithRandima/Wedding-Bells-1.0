<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientVendorBooking extends Model
{
    use HasFactory;


    public function client(): BelongsTo {
        return $this -> belongsTo(Client::class);
    }

    // public function advertisement(): BelongsTo {
    //     return $this -> belongsTo(Advertisement::class);
    // }

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class, 'ad_id', 'id');
    }
}
