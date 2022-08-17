<?php
declare(strict_types=1);

namespace RalfLang\SatisPlugin;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Command\BaseCommand;
use Composer\Satis\Console\Command\InitCommand;


class InitCommandProxy extends InitCommand
{
    protected function configure(): void
    {
        parent::configure();
        $this->setName('satis:init');
    }
}