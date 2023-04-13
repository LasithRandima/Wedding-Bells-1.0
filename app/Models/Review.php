<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;


    public function vendor(): BelongsTo {
        return $this -> belongsTo(Vendor::class);
    }

    public function client(): BelongsTo {
        return $this -> belongsTo(Client::class);
    }

    public function advertisement(): BelongsTo {
        return $this -> belongsTo(Advertisement::class);
    }

    public function topadss(): BelongsTo {
        return $this -> belongsTo(TopAds::class);
    }
}
