<?php

namespace Vmajans\Kestane\Createapp\Console;

class MigrateCommand extends CreateCommand
{
    protected $name        = 'kestane:createMigrate';
    protected $description = 'Migrate sınıfı üretildi';
    protected $type        = '';

    protected $stubName    = 'migrate_create.stub';
    protected $installPath = 'Database/Migrations';

}