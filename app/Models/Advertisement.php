<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advertisement extends Model
{
    use HasFactory;



    public function vendor(): BelongsTo {
        return $this -> belongsTo(Vendor::class);
    }

    public function reviews(): HasMany {
        return $this -> hasMany(Review::class);
    }

    public function category(): BelongsTo  {
        return $this -> belongsTo(VendorCategory::class);
    }
}
