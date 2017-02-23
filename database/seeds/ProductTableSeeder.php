<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'   => 'http://www.petsitter.university/wp-content/uploads/2015/09/male-t-shirt-510x510.jpg',
            'title'       => 'Product 1',
            'price'       => 10,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam exercitationem facere, magni perferendis porro quasi, quia similique soluta voluptatem voluptatibus? Alias aperiam at autem vero! Dicta, ipsam suscipit!'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'http://www.petsitter.university/wp-content/uploads/2015/09/male-t-shirt-510x510.jpg',
            'title'       => 'Product 2',
            'price'       => 120,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam exercitationem facere, magni perferendis porro quasi, quia similique soluta voluptatem voluptatibus? Alias aperiam at autem vero! Dicta, ipsam suscipit!'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'http://www.petsitter.university/wp-content/uploads/2015/09/male-t-shirt-510x510.jpg',
            'title'       => 'Product 3',
            'price'       => 100,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam exercitationem facere, magni perferendis porro quasi, quia similique soluta voluptatem voluptatibus? Alias aperiam at autem vero! Dicta, ipsam suscipit!'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'http://www.petsitter.university/wp-content/uploads/2015/09/male-t-shirt-510x510.jpg',
            'title'       => 'Product 4',
            'price'       => 00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam exercitationem facere, magni perferendis porro quasi, quia similique soluta voluptatem voluptatibus? Alias aperiam at autem vero! Dicta, ipsam suscipit!'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'http://www.petsitter.university/wp-content/uploads/2015/09/male-t-shirt-510x510.jpg',
            'title'       => 'Product 5',
            'price'       => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam exercitationem facere, magni perferendis porro quasi, quia similique soluta voluptatem voluptatibus? Alias aperiam at autem vero! Dicta, ipsam suscipit!'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'http://www.petsitter.university/wp-content/uploads/2015/09/male-t-shirt-510x510.jpg',
            'title'       => 'Product 6',
            'price'       => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam exercitationem facere, magni perferendis porro quasi, quia similique soluta voluptatem voluptatibus? Alias aperiam at autem vero! Dicta, ipsam suscipit!'
        ]);
        $product->save();

    }
}
