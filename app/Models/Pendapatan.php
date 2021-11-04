<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    
    public function sumber(){
        return $this->belongsTo(Sumber::class);
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
