<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cd extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'cd_title'
    ];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
