<?php

namespace Database\Seeders;

use App\Models\PortofolioItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = PortofolioItem::firstWhere(
            ['name' => 'Mirrors']
        );
        if (!$item) {
            $item = PortofolioItem::create([
                'name' => 'Mirrors',
                'content' => ''
            ]);
            $item->images()->create(['url' => '/images/mirrors/1.JPG']);
            $item->images()->create(['url' => '/images/mirrors/2.JPG']);
            $item->images()->create(['url' => '/images/mirrors/3.JPG']);
            $item->images()->create(['url' => '/images/mirrors/4.JPG']);
            $item->images()->create(['url' => '/images/mirrors/5.JPG']);
            $item->images()->create(['url' => '/images/mirrors/6.JPG']);
            $item->images()->create(['url' => '/images/mirrors/7.JPG']);
            $item->images()->create(['url' => '/images/mirrors/8.JPG']);
            $item->images()->create(['url' => '/images/mirrors/9.JPG']);
            $item->images()->create(['url' => '/images/mirrors/10.JPG']);
        }
    }
}
