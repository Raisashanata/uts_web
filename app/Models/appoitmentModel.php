<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appoitmentModel extends Model
{
    use HasFactory;
    protected $table = "appoitment";
    public $timestamps = false;
}
