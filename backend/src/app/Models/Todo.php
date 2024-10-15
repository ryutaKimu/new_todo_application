<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    /**
     * @var string
     */

     protected $table = 'todos';

     /**
      * @var string
      */

      protected $primaryKey = 'id';

       /**
      * @var array
      */

      protected $fillable = [
        'title',
        'description'
      ];
}
