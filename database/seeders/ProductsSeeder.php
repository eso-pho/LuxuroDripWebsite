<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//      Mens
        for ($i=1; $i <=5; $i++){
            Products::create([
                'name' => 'Mens',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut neque tellus, maximus ut suscipit ac, feugiat sed nibh. Fusce feugiat ac libero id commodo. Proin mi nibh, fermentum et velit in, volutpat gravida nulla. In ipsum tortor, vestibulum sit amet egestas ut, hendrerit in est. In finibus facilisis arcu id placerat. Praesent aliquam lectus vitae consequat pulvinar. ',
                'image' => 'resources/assets/images/products/mens-image.png',
                'SKU' => substr(md5(microtime()), 0, 8),
                'price' => rand(99,9999),
                'quantity' => rand(1,10),
            ]);
        }//      Womens
        for ($i=1; $i <=5; $i++){
            Products::create([
                'name' => 'Womens',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut neque tellus, maximus ut suscipit ac, feugiat sed nibh. Fusce feugiat ac libero id commodo. Proin mi nibh, fermentum et velit in, volutpat gravida nulla. In ipsum tortor, vestibulum sit amet egestas ut, hendrerit in est. In finibus facilisis arcu id placerat. Praesent aliquam lectus vitae consequat pulvinar. ',
                'image' => 'resources/assets/images/products/womens-image.png',
                'SKU' => substr(md5(microtime()), 0, 8),
                'price' => rand(99,9999),
                'quantity' => rand(1,10),
            ]);
        }//      Kids
        for ($i=1; $i <=5; $i++){
            Products::create([
                'name' => 'Kids',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut neque tellus, maximus ut suscipit ac, feugiat sed nibh. Fusce feugiat ac libero id commodo. Proin mi nibh, fermentum et velit in, volutpat gravida nulla. In ipsum tortor, vestibulum sit amet egestas ut, hendrerit in est. In finibus facilisis arcu id placerat. Praesent aliquam lectus vitae consequat pulvinar. ',
                'image' => 'resources/assets/images/products/kids-image.png',
                'SKU' => substr(md5(microtime()), 0, 8),
                'price' => rand(99,9999),
                'quantity' => rand(1,10),
            ]);
        }//      Accessories
        for ($i=1; $i <=5; $i++){
            Products::create([
                'name' => 'Accessory',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut neque tellus, maximus ut suscipit ac, feugiat sed nibh. Fusce feugiat ac libero id commodo. Proin mi nibh, fermentum et velit in, volutpat gravida nulla. In ipsum tortor, vestibulum sit amet egestas ut, hendrerit in est. In finibus facilisis arcu id placerat. Praesent aliquam lectus vitae consequat pulvinar. ',
                'image' => 'resources/assets/images/products/accessories-image.png',
                'SKU' => substr(md5(microtime()), 0, 8),
                'price' => rand(99,9999),
                'quantity' => rand(1,10),
            ]);
        }
    }
}
