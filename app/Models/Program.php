<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = "programs";

    protected $fillable = [
        "program_name",
        "duration",
        "image_url",
        "publication_status",
    ];
}
