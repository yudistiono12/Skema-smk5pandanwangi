<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
        // merelasika artikel ke kategori. satu artikel memliki satu kategori
    }
}
