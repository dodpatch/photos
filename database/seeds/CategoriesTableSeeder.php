<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Category::create([
        	'name'=>'Personnelles',]);
        Category::create([
        	'name'=>'Photos Amis',]);
        Category::create([
        	'name'=>'Paysages',]);

        Category::create([
        	'name'=>'Maisons',]);

        Category::create([
        	'name'=>'Animaux',]);

        Category::create([
        	'name'=>'Végétation',]);
    }
}
