<?php


use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $categories = factory(\App\Models\Category::class,5)->create();
         $categories->each(function($category){
            factory(\App\Models\Menu::class,10)->create([
                'category_id' => $category->id,

            ]);


         });
    }
}
