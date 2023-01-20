<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;

    protected $table ='lamaran';
    protected $fillable = ['name', 'no_telpon', 'email', 'file_cv', 'updated_at', 'created_at'];

}
