<?php

namespace App\Models;

use App\Http\Traits\TasksTrait;
use App\Http\Traits\TimestampsTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    //5 min ago

   use TimestampsTrait;

   use TasksTrait;
    
   public function getDates() {
    return ['created_at', 'updated_at', 'due_date'];
}
  
    //define the table

    protected $table= "tasks";

    //created at (5mins ago)
    //
    public function user()
{
    return $this->belongsTo('App\User');
}
}
