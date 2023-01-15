<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "number",
        "age" ,
        "gender",
        "mental_health" ,
        "extra_support",
        "score" ,
        "department" ,
        "remark",


    ];
    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(Patient::class);
    }

}
