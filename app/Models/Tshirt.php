<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tshirt extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'tshirt_color',
        'tshirt_size'
    ];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}