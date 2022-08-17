<?php
declare(strict_types=1);

namespace RalfLang\SatisPlugin;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Command\BaseCommand;
use Composer\Satis\Console\Command\PurgeCommand;


class PurgeCommandProxy extends PurgeCommand
{
    protected function configure(): void
    {
        parent::configure();
        $this->setName('satis:purge');
    }
}