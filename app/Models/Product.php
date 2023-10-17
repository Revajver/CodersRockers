<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'product_id';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function tshirt(): HasOne
    {
        return $this->hasOne(Tshirt::class, 'product_id');
    }

    public function cd(): HasOne
    {
        return $this->hasOne(Cd::class, 'product_id');
    }
}
