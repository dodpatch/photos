<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\NameSaving;

class Category extends Model
{
    protect $fillable = [
    	'name','slug'];
    protected $dispatchEvents = [
    	'saving'=> NameSaving::class,]
}
