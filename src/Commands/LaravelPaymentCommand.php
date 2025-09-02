<?php

namespace HPayment\LaravelPayment\Commands;

use Illuminate\Console\Command;

class LaravelPaymentCommand extends Command
{
    public $signature = 'laravel-payment';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
