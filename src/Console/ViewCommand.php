<?php

namespace Vmajans\Kestane\Createapp\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ViewCommand extends Command
{
    protected $signature = 'kestane:createLang {name}';
    protected $type      = 'Lang';

    public function fire()
    {
        $stubs   = __DIR__ . '/stubs/lang.stub';
        $name    = strtolower($this->argument('name'));
        $path    = base_path('resources/lang/tr/admin/'.$name.'.php');

        File::copy($stubs, $path);
    }

}