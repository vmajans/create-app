<?php

namespace Vmajans\Kestane\Createapp\Console;

class RepositoryCommand extends CreateCommand
{
    protected $name        = 'kestane:createRepository';
    protected $description = 'Repository sınıfı üretildi';
    protected $type        = 'Repository';

    protected $stubName    = 'repository.stub';
    protected $installPath = 'Repositories';

}