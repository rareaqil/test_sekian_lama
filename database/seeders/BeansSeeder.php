<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bean;

class BeansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bean::create([
            'NamaBean' => 'Cubita',
            'Description' => 'Cubita is sun dried and hand sorted. It originates from an elevation of over 2000 meters in the Andes',
            'Price' => 12.00,
        ]);

        Bean::create([
            'NamaBean' => 'Colombian Supremo',
            'Description' => 'This smoothm full-flavored coffee from Colombia boasts a sweet delicate aroma. This medium bodied brew',
            'Price' => 13.50,
        ]);
        Bean::create([
            'NamaBean' => 'Arabian Mocha',
            'Description' => 'Arabian Mocha beans are grown in Yemen and are known for their winey, acidic, and intense flavor with a rich body.',
            'Price' => 14.75,
        ]);
        
        Bean::create([
            'NamaBean' => 'Ethiopian Yirgacheffe',
            'Description' => 'Ethiopian Yirgacheffe coffee is known for its bright acidity and floral notes. It has a medium body and a wine-like finish.',
            'Price' => 15.25,
        ]);
        
        Bean::create([
            'NamaBean' => 'Kenyan AA',
            'Description' => 'Kenyan AA coffee is grown at high altitudes in Kenya and is known for its bright acidity, full body, and fruity flavors.',
            'Price' => 16.00,
        ]);
        
        Bean::create([
            'NamaBean' => 'Jamaican Blue Mountain',
            'Description' => 'Jamaican Blue Mountain coffee is one of the most sought-after and expensive coffees in the world. It is known for its mild flavor and lack of bitterness.',
            'Price' => 20.50,
        ]);
        
        Bean::create([
            'NamaBean' => 'Sumatra Mandheling',
            'Description' => 'Sumatra Mandheling coffee is known for its full body, low acidity, and rich, complex flavor with hints of chocolate and earthiness.',
            'Price' => 18.75,
        ]);
        
        Bean::create([
            'NamaBean' => 'Hawaiian Kona',
            'Description' => 'Hawaiian Kona coffee is grown on the slopes of the Mauna Loa volcano in Hawaii. It is known for its smooth, rich flavor and low acidity.',
            'Price' => 22.00,
        ]);
        
        Bean::create([
            'NamaBean' => 'Guatemalan Antigua',
            'Description' => 'Guatemalan Antigua coffee is known for its full body, rich flavor, and smoky overtones. It has a velvety smooth texture and a sweet, floral aroma.',
            'Price' => 17.50,
        ]);
        
        Bean::create([
            'NamaBean' => 'Brazilian Santos',
            'Description' => 'Brazilian Santos coffee is known for its mild, smooth flavor and medium body. It is often used as a base for espresso blends.',
            'Price' => 14.00,
        ]);
        
    }
}
