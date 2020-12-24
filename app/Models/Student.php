<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //protected table = 'mahasiswa';
    // use HasFactory;
    // protected $table = 'mahasiswa';// karena bukan jamak harus dikasih tau, PK jg sama , 
    //kalau fillabel -> ini boleh diisi sisanya ga, guarded yg ini boleh sisanya boleh/kebalikannya
    // use SoftDeletes;
    //withTrashed --> kalau mau menampilkan semua data yang hilang
    protected $fillable = [
        'nama',
        'nik',
        'email',
        'jurusan'
    ];
}   
