<?php

    // under sa app
    // namespace App;
    // change namespace to App\Models if you put your model inside models
    namespace App\Models; 

    // library to create Model under lumen
    use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        // name of table
         protected $table = 'tbluser';
        // column sa table
         protected $fillable = [
            'username', 'passowrd','gender'
         ];
    }

    
