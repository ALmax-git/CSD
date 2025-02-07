<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = ['name', 'image', 'info', 'details'];
    public function items()
    {
        return $this->hasMany(portfolio_items::class);
    }
}
