<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Event\NameSaving;

class Category extends Model
{
   protected $fillable = ['name','slug'];

   protected $dispatchEvents = ['saving' => NameSaving::class,];

   public function images() 
   {
   	return $this->hasMany(Image::class);
   }
}
