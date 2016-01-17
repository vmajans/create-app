<?php

namespace Vmajans\Kestane\Createapp\Console;

class ContractCommand extends CreateCommand
{
    protected $name        = 'kestane:createContract';
    protected $description = 'Contract sınıfı üretildi';
    protected $type        = 'Contract';

    protected $stubName    = 'contract.stub';
    protected $installPath = 'Contracts';

}