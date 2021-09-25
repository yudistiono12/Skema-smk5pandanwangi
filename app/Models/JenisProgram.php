<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisProgram extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function programs()
    {
        return $this->hasMany(Program::class);
        // satu kategori dimiliki banyak artikel
    }

}
