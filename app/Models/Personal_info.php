<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_info extends Model
{
    use HasFactory;
    protected $table = "personal_info";
    protected $primaryKey = "nId";
}
