<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    //relacion de producto con marca toda relacion se expresa con una funcion 
    //funcion
    public function categoria(){
        return $this -> belongsTo( categoria::class );

    }
    public function marca(){
        return $this -> belongsTo( marca::class );

    }

}
