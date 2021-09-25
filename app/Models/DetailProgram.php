<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailProgram extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['programs'];

    public function programs()
    {
        return $this->belongsTo(Program::class, 'program_id');
        // satu kategori dimiliki banyak artikel
    }
}
