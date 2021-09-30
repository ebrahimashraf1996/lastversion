<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = "goals";


    protected $fillable = [ 'content', 'is_active', 'created_at', 'updated_at'];


    public function getActive(){
        return  $this -> is_active  == 0 ?  'غير مفعل'   : 'مفعل' ;
    }

    public function scopeActive($query){
        return $query -> where('is_active',1) ;
    }

    public function scopeSelection($query){
        return $query -> select([
            'id',
            'content',
            'is_active'
        ]) ;
    }
}
