<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'Catalog';
    public $timestamps = false;
    public function design(){
        return $this->belongsToMany(Design::class, 'c_d_contact');
    }
}
