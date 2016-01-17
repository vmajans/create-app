<?php namespace Vmajans\Kestane\Createapp;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'kestanecreateapp';
    }
}
