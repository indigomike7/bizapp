<?php

return [

    'secret_key' => env('BIZAPPAY_SECRET_KEY', '6isly5g4-ch32-mbzx-9us6-b6rronbju4pn'),

    'payment_url' => env('BIZAPPAY_URL', 'https://www.bizappay.com/api/v3'),

    'payment_gateway_url' =>  env('BIZAPP_GATEWAY_URL', 'https://www.bizappay'),

    'notifpro_secret_key' => env('NOTIFPRO_BIZAPPAY_SECRET_KEY', '4m03q8fq-erte-98px-o64y-yd3eezwgij5i')

];
