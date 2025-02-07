<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio_items extends Model
{
    protected $fillable = ['portfolio_id', 'name', 'image', 'info'];
    public function portfolio()
    {
        return $this->belongsTo(portfolio::class);
    }
}
