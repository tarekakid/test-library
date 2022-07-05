<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urls extends Model
{
    use HasFactory;
    protected $table ='urls';
    protected $fillable = [
        'material_id',
        'signature',
        'url'
    ];
}
