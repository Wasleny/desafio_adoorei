<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, float, string>
     */
    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function sale() {
        return $this->hasMany(SaleProduct::class);
    }
}
