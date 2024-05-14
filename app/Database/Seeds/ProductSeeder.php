<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Dress',
                'color' => 'White',
                'review' => 4.9,
                'image' => '/img/product/Rectangle 38.png',
                'created_at' => Time::parse('15 day ago'),
                'updated_at' => Time::parse('15 day ago'),
            ],
            [
                'id' => 2,
                'name' => 'Formal Suit',
                'color' => 'Gray',
                'review' => 4.9,
                'image' => '/img/product/Rectangle 39.png',
                'created_at' => Time::parse('14 day ago'),
                'updated_at' => Time::parse('14 day ago'),
            ],
            [
                'id' => 3,
                'name' => 'Woman Suit',
                'color' => 'White',
                'review' => 4.9,
                'image' => '/img/product/Rectangle 40.png',
                'created_at' => Time::parse('13 day ago'),
                'updated_at' => Time::parse('13 day ago'),
            ],
            [
                'id' => 4,
                'name' => 'Womain Suit',
                'color' => 'White',
                'review' => 4.8,
                'image' => '/img/product/Rectangle 41.png',
                'created_at' => Time::parse('12 day ago'),
                'updated_at' => Time::parse('12 day ago'),
            ],
            [
                'id' => 5,
                'name' => 'Dress',
                'color' => 'Blue',
                'review' => 4.8,
                'image' => '/img/product/Rectangle 42.png',
                'created_at' => Time::parse('11 day ago'),
                'updated_at' => Time::parse('11 day ago'),
            ],
            [
                'id' => 6,
                'name' => 'Casual',
                'color' => 'Brown',
                'review' => 4.8,
                'image' => '/img/product/Rectangle 43.png',
                'created_at' => Time::parse('10 day ago'),
                'updated_at' => Time::parse('10 day ago'),
            ],
            [
                'id' => 7,
                'name' => 'Dress',
                'color' => 'Black',
                'review' => 4.7,
                'image' => '/img/product/Rectangle 44.png',
                'created_at' => Time::parse('9 day ago'),
                'updated_at' => Time::parse('9 day ago'),
            ],
            [
                'id' => 8,
                'name' => 'Dress',
                'color' => 'Pink',
                'review' => 4.7,
                'image' => '/img/product/Rectangle 45.png',
                'created_at' => Time::parse('8 day ago'),
                'updated_at' => Time::parse('8 day ago'),
            ],
            [
                'id' => 9,
                'name' => 'Outfit Jeans',
                'color' => 'Purple',
                'review' => 3.8,
                'image' => '/img/product/Rectangle 46.png',
                'created_at' => Time::parse('7 day ago'),
                'updated_at' => Time::parse('7 day ago'),
            ],
            [
                'id' => 10,
                'name' => 'Outfit',
                'color' => 'Brown',
                'review' => 2.7,
                'image' => '/img/product/Rectangle 48.png',
                'created_at' => Time::parse('6 day ago'),
                'updated_at' => Time::parse('6 day ago'),
            ],
            [
                'id' => 11,
                'name' => 'Outfit',
                'color' => 'Orange',
                'review' => 3.5,
                'image' => '/img/product/Rectangle 50.png',
                'created_at' => Time::parse('5 day ago'),
                'updated_at' => Time::parse('5 day ago'),
            ],
            [
                'id' => 12,
                'name' => 'Outfit',
                'color' => 'White Gray',
                'review' => 3.6,
                'image' => '/img/product/Rectangle 52.png',
                'created_at' => Time::parse('4 day ago'),
                'updated_at' => Time::parse('4 day ago'),
            ],
            [
                'id' => 13,
                'name' => 'Outfit',
                'color' => 'Gray Black',
                'review' => 3.2,
                'image' => '/img/product/Rectangle 47.png',
                'created_at' => Time::parse('3 day ago'),
                'updated_at' => Time::parse('3 day ago'),
            ],
            [
                'id' => 14,
                'name' => 'Dress',
                'color' => 'Black',
                'review' => 3.0,
                'image' => '/img/product/Rectangle 49.png',
                'created_at' => Time::parse('2 day ago'),
                'updated_at' => Time::parse('2 day ago'),
            ],
            [
                'id' => 15,
                'name' => 'Dress',
                'color' => 'Yellow',
                'review' => 2.8,
                'image' => '/img/product/Rectangle 52.png',
                'created_at' => Time::parse('1 day ago'),
                'updated_at' => Time::parse('1 day ago'),
            ],
            [
                'id' => 16,
                'name' => 'Outfit',
                'color' => 'Green White',
                'review' => 4.2,
                'image' => '/img/product/Rectangle 53.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];

        $recommendations = [
            [
                'id' => 1,
                'description' => 'Deskripsi Outfit Formal Perpaduan antara celana palazzo dan Blazer putih',
                'product_id' => 4,
            ],
            [
                'id' => 2,
                'description' => 'Deskripsi Outfit formal Setelan celana dan blazer yang serasi dapat digunakan waktu menghadiri acara formal ',
                'product_id' => 2,
            ],
            [
                'id' => 3,
                'description' => 'Deskripsi outfit modern Perpaduan antara celana putih dan jaket yang terkesan sangat simpel',
                'product_id' => 3,
            ],
            [
                'id' => 4,
                'description' => 'Deskripsi Dress Dress putih yang cocok digunakan waktu ada acara pesta pesta dan sangat terlihat elegan ',
                'product_id' => 1,
            ],
            [
                'id' => 5,
                'description' => 'Deskripsi outfit modern perpaduan antara crop blouse green dengan celana skinny yang terlihat sangat santai ',
                'product_id' => 16,
            ],
            [
                'id' => 6,
                'description' => 'Deskripsi outfit kekinian perpaduan antara switer merah dan celana cargo yang sangat kekinian ',
                'product_id' => 9,
            ],
        ];

        // Using Query Builder
        $this->db->table('product')->insertBatch($products);
        $this->db->table('recommendation')->insertBatch($recommendations);
    }
}
