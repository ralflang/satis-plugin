<?php
declare(strict_types=1);

namespace RalfLang\SatisPlugin;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Command\BaseCommand;

class ConfigureSatis extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('satis:configure');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('TBD - configure the satis repo file');
        return 0;
    }
}