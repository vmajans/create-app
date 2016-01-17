<?php

namespace Vmajans\Kestane\Createapp\Console;

class ModelCommand extends CreateCommand
{
    protected $name        = 'kestane:createModel';
    protected $description = 'Model sınıfı üretildi';
    protected $type        = '';

    protected $stubName    = 'model.stub';
    protected $installPath = 'Database/Models';

}