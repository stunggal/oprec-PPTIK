<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class period extends Model
{
    use HasFactory;

    public $table = 'period';

    //period, is_active
    protected $fillable = ['period', 'is_active'];
}
