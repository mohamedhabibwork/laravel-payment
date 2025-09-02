<?php

namespace HPayment\LaravelPayment\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HPayment\LaravelPayment\LaravelPayment
 */
class LaravelPayment extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HPayment\LaravelPayment\LaravelPayment::class;
    }
}
