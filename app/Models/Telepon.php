<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;
    protected $fillable = ['id','nomer_telepon','pengguna_id'];
    // protected $table =['pengguna'];
    public $timestamps = true;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }
}
