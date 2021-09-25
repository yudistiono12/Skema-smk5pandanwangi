<?php

namespace App\Models;

use App\Models\JenisProgram;
use App\Models\DetailProgram;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['jenis_program'];

    public function jenis_program()
    {
        return $this->belongsTo(JenisProgram::class, 'jenis_id');
        // merelasika artikel ke kategori. satu artikel memliki satu kategori
    }

    public function detail_programs()
    {
        return $this->belongsTo(DetailProgram::class);
        // satu kategori dimiliki banyak artikel
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    
    // fahmi luthfillah
}
