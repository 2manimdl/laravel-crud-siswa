<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kelas', 'jurusan'];

    protected $table = 'siswa'; // Specify the table name if it differs from the model name
}
