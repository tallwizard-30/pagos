<?php
use App\plataformasPago;
use Illuminate\Database\Seeder;

class plataformasPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        plataformasPago::create([
            'name'=>'Paypal',
            'image'=>'img/plataformasPagos/paypal.jpg',
        ]);
        plataformasPago::create([
            'name'=>'stripe',
            'image'=>'img/plataformasPagos/stripe.jpg',
        ]);
        plataformasPago::create([
            'name'=>'payu',
            'image'=>'img/plataformasPagos/payu.jpg',
        ]);
        plataformasPago::create([
            'name'=>'Mercado Pago',
            'image'=>'img/plataformasPagos/mercadopago.jpg',
        ]);
    }
}
