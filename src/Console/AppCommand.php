<?php

namespace Vmajans\Kestane\Createapp\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class AppCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kestane:createApp {name}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = [
            'name' => $this->argument('name')
        ];

        $model      = $this->call('kestane:createModel', $data);
        $contract   = $this->call('kestane:createContract', $data);
        $repository = $this->call('kestane:createRepository', $data);
        $request    = $this->call('kestane:createRequest', $data);
        $controller = $this->call('kestane:createController', $data);
        $lang       = $this->call('kestane:createLang', $data);
        $view       = $this->call('kestane:createView', $data);
    }
}