<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Commend extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prix',
        'image',
        'client_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
