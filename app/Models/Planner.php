<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    protected $fillable = [
        'hari',
        'sarapan_id',
        'siang_id',
        'malam_id'
    ];

    public function sarapan()
    {
        return $this->belongsTo(Menu::class, 'sarapan_id');
    }

    public function siang()
    {
        return $this->belongsTo(Menu::class, 'siang_id');
    }

    public function malam()
    {
        return $this->belongsTo(Menu::class, 'malam_id');
    }
}