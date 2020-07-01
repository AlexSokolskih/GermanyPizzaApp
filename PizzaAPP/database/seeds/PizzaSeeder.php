<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'name' => 'Pepperoni',
            'description' => 'American classic with spicy pepperoni, Mozzarella and signature tomato sauce',
            'price' => 111,
            'image' => 'Pepperoni-traditional.jpg',
            'order_number' => 1,
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Meat',
            'description' => 'Super meat pizza with spicy pepperoni, ham, crispy bacon, flavorful pork, beef, Mozzarella and signature tomato sauce',
            'price' => 222,
            'image' => 'Meat-traditional.jpg',
            'order_number' => 2,
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Hawaiian',
            'description' => 'Tropical classic with flavorful ham, tomato sauce and Mozzarella combined with pineapple bits',
            'price' => 111,
            'image' => 'Hawai-traditional.jpg',
            'order_number' => 3,
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Vegetarian',
            'description' => 'Mozzarella cheese, tomato sauce, tomatoes, mushrooms, sweet green pepper, onion, olives',
            'price' => 100,
            'image' => 'Vegetarian-traditional.jpg',
            'order_number' => 4,
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Four cheeses',
            'description' => 'Traditional blend of cheeses: Mozzarella, soft fresh cheese, blue cheese, Reggianito with signature tomato sauce and spicy oregano',
            'price' => 166,
            'image' => '4-cheese-traditional.jpg',
            'order_number' => 5,
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Margherita',
            'description' => 'Traditional recipe with signature tomato sauce, Mozzarella, oregano and juicy tomatoes',
            'price' => 200,
            'image' => 'Margherita-traditional.jpg',
            'order_number' => 6,
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Cheese pizza',
            'description' => 'Simple and delicious: with signature tomato sauce and trailing Mozzarella',
            'price' => 215,
            'image' => 'Cheese-traditional.jpg',
            'order_number' => 7,
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Italian with mozzarella',
            'description' => 'Traditional Italian recipe with two types of cheese: grated Mozzarella and classic chillegini; spicy pepperoni, mushrooms and blend of seasonings',
            'price' => 241,
            'image' => 'e9bd5c6431e2148b1a5fd7d8b9d0df10.jpg',
            'order_number' => 8,
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Pizza with red fish',
            'description' => 'The long-awaited pizza! Fresh taste! Bold mix of salmon fish with mozzarella cheese, cream cheese and tomatoes',
            'price' => 252,
            'image' => '664fc3a1bb45ab7124183de773ec625e.jpg',
            'order_number' => 9,
        ]);
    }
}
