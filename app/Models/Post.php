<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



 class Post extends Model
 {
     use HasFactory;
 
     public function Thecategory()
     {
        $this->belongsTo(category::class,'category_id');
     }

    public function Thecomments()
    {
        $this->belongsTo(comments::class);

    }

    public function Theuser()
    {
        $this->belongsTo(user::class);
    }


    }





     