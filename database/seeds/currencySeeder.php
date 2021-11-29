<?php
use App\currency;
use Illuminate\Database\Seeder;

class currencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currency = [
            'usd',
            'eur',
            'gbp',
        ];

        foreach ($currency as $currency) {
            currency::create([

                'iso'=>$currency,

            ]);
        }
    }
}
