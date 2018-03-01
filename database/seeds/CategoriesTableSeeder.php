<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Tech',
                'slug' => 'tech',
                'created_at' => '2018-03-01 19:55:07',
                'updated_at' => '2018-03-01 19:55:07',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Science',
                'slug' => 'science',
                'created_at' => '2018-03-01 19:55:20',
                'updated_at' => '2018-03-01 19:55:20',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Business',
                'slug' => 'business',
                'created_at' => '2018-03-01 19:55:38',
                'updated_at' => '2018-03-01 19:55:38',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Social Good',
                'slug' => 'social-good',
                'created_at' => '2018-03-01 19:55:58',
                'updated_at' => '2018-03-01 19:55:58',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Entertainment',
                'slug' => 'entertainment',
                'created_at' => '2018-03-01 19:56:23',
                'updated_at' => '2018-03-01 19:56:23',
            ),
        ));
        
        
    }
}