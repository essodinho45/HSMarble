<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::firstOrCreate(
            ['name' => 'toughened antique mirror'],
            ['content' => 'At <b>HS London Marble</b>, we offer toughened antique mirrors that combine elegance with durability. Our toughening process enhances the strength of the mirror, making it resistant to scratches and breakage. These mirrors feature a distressed vintage finish that adds character and charm to any space. Whether you\'re looking to add a touch of sophistication to your home or office, our toughened antique mirrors are the perfect choice. Transform your space with the timeless beauty of our antique mirrors from <b>HS Marble London</b>.']
        );
        Service::firstOrCreate(
            ['name' => 'plain colour'],
            ['content' => 'We offer a stunning range of plain color glass at <b>HS London Marble</b>, that adds a touch of elegance and sophistication to any space. Our high-quality plain color glass is perfect for creating a sleek and modern look in your home or office. Whether you\'re looking to incorporate a subtle pop of color or create a seamless and sophisticated backdrop, our plain color glass is the perfect choice. With our expertise and dedication to quality, you can trust <b>HS London Marble</b> to provide you with the perfect solution for your glass needs.']
        );
        Service::firstOrCreate(
            ['name' => 'design printed'],
            ['content' => 'At <b>HS London Marble</b>, we offer a wide range of design printed glass options to enhance the aesthetic appeal of your space. Our design printed glass is a versatile and stylish choice for adding a unique touch to your interiors. Whether you\'re looking to create a bold statement or simply add a subtle element of design, our design printed glass can be customized to suit your specific preferences. With high-quality materials and expert craftsmanship, our design printed glass will bring new life to any room in your home or office. Contact us today to explore the endless design possibilities with our design printed glass products.']
        );
        Service::firstOrCreate(
            ['name' => 'sparkling colour'],
            ['content' => 'Add a touch of elegance and glamour to your space with our stunning selection of sparkling color glass. At <b>HS London Marble</b>, we offer a range of vibrant and shimmering glass options that will instantly elevate the aesthetic of any room. Whether you want to create a bold statement piece with a splash of color or add a subtle hint of sparkle to your design, our sparkling color glass is the perfect choice. With our expertise and high-quality products, you can transform your space into a stylish and sophisticated oasis. Browse our collection today and discover the beauty and versatility of sparkling color glass.']
        );
        Service::firstOrCreate(
            ['name' => 'led backlit'],
            ['content' => 'Introducing our exquisite LED backlit mirrors, the perfect fusion of functionality and sophistication. Elevate your space with these modern and stylish mirrors that not only provide practical illumination but also add a touch of elegance to any room. Our LED backlit mirrors are crafted with precision and attention to detail, ensuring a high-quality and durable product that will enhance the ambiance of your space. Whether it\'s for a residential or commercial setting, our LED backlit mirrors are sure to impress with their sleek design and stunning visual impact. Experience luxury and style with <b>HS London Marble</b>\'s LED backlit mirrors.']
        );
        Service::firstOrCreate(
            ['name' => 'bathroom mirror'],
            ['content' => '<b>HS London Marble</b> offers a stunning collection of bathroom mirrors that combine functionality with style. Our range includes a variety of designs, shapes, and sizes to suit every taste and bathroom decor. Whether you are looking for a sleek and modern mirror or a classic and elegant design, we have the perfect mirror to enhance your bathroom space. Our high-quality mirrors are made using premium materials and craftsmanship to ensure durability and longevity. Transform your bathroom into a luxurious retreat with a beautiful mirror from <b>HS London Marble</b>.']
        );
        Service::firstOrCreate(
            ['name' => 'Future wall mirrors'],
            ['content' => 'Our collection of future wall mirrors at <b>HS London Marble</b> glass company brings a touch of contemporary elegance to any bathroom space. Crafted from high-quality glass and featuring innovative LED backlighting technology, these mirrors not only enhance the aesthetic appeal of the room but also provide functional and practical lighting for your daily grooming routine. The sleek and modern design of our future wall mirrors adds a sophisticated touch to any bathroom setting, making them a must-have accessory for those looking to elevate their space with style and functionality.']
        );
        Service::firstOrCreate(
            ['name' => 'glass balustrade'],
            ['content' => 'Glass balustrades are a sophisticated and modern- addition to any staircase or balcony, offering both style and safety. At <b>HS London Marble</b>, we offer a wide range of glass balustrade options to suit your design preferences and architectural requirements. Our expert team can customize the balustrades to fit your space perfectly, creating a sleek and seamless look. With high-quality materials and precise craftsmanship, our glass balustrades are not only functional but also add a touch of elegance to any interior or exterior space. Trust <b>HS London Marble</b> to deliver stunning glass balustrade solutions that enhance the beauty and functionality of your home or commercial property.']
        );
        Service::firstOrCreate(
            ['name' => 'worktops'],
            ['content' => 'For high-quality worktops that combine functionality with elegance, look no further than <b>HS London Marble</b>. Our range of worktops are expertly crafted from premium materials, ensuring durability and a stylish finish that will elevate any kitchen or bathroom design. Whether you prefer the timeless sophistication of marble, the sleek modern look of quartz, or the natural beauty of granite, we have the perfect worktop solution to suit your personal style and taste. Trust <b>HS London Marble</b> for stunning worktops that will enhance the aesthetic appeal and functionality of your space.']
        );
    }
}
