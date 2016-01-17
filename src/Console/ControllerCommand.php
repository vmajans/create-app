<?php

namespace Vmajans\Kestane\Createapp\Console;

class ControllerCommand extends CreateCommand
{
    protected $name        = 'kestane:createController';
    protected $description = 'Controller sınıfı üretildi';
    protected $type        = 'Controller';

    protected $stubName    = 'controller.stub';
    protected $installPath = 'Http/Controllers/Admin';
}