<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Melding extends Model
{
    use HasFactory;

    protected $fillable = [
        'urgency',
        'category',
        'issue',
        'file_path',
        'status',
        'user_id',

    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
