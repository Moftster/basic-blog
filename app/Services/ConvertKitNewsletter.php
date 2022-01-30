<?php

namespace App\Services;

class ConvertKitNewsletter implements Newsletter
{
    public function subscribe(string $email, ?string $list = null)
    {
        // subscribe user with convert kit specific api request
    }
}
