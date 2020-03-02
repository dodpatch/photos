<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Event\NameSaving::class;

class Category extends Model
{
   protected $dispatchEvents = ['saving' => NameSaving::class,];

   public function images() 
   {
   	return $this->hasMany(Image::class);
   }
}
