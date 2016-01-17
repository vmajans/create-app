<?php

namespace Vmajans\Kestane\Createapp\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class LangCommand extends Command
{
    protected $signature = 'kestane:createView {name}';
    protected $type      = 'View';

    public function fire()
    {
        $name    = strtolower($this->argument('name'));
        $stubs   = __DIR__ . '/stubs/view';
        $path    = base_path('resources/themes/gokyuzu/views/admin/' . $name);

        File::copyDirectory($stubs, $path);
    }

}