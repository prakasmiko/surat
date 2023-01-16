<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_master extends Model
{
    use HasFactory;
    protected $table = 'master_kode_sifat';
    protected $guarded = [];

    public $timestamps = true;
    protected $fillable = ['kode_sifat', 'sifat', 'status'];
}
