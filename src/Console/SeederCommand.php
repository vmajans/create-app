<?php

namespace Vmajans\Kestane\Createapp\Console;

class SeederCommand extends CreateCommand
{
    protected $name        = 'kestane:createSeeder';
    protected $description = 'Seeder sınıfı üretildi';
    protected $type        = 'Seeder';

    protected $stubName    = 'seeder.stub';
    protected $installPath = 'Database/Seeds';

}