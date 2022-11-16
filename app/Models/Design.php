<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $table = 'Design';
    public $timestamps = false;
    public function catalog(){
        return $this->belongsToMany(Catalog::class, 'c_d_contact');
    }
}
