<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Mutators
    public function setNameAttribute($value)
    {
        //$this->name = strtolower($value); funciona tambien.
        $this->attributes['name'] = strtolower($value);
    }
    //Accessors
    public function getSlugAttribute()
    {
        return str_replace(' ','-',$this->name);
    }
    //Metodo personalizado
    public function href()
    {
        return "blog/$this->slug";
    }
}
