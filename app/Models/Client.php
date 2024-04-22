<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commend;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    public function Commends(){
        return $this->hasMany(Commend::class);
    }
}
