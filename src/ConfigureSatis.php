<?php
declare(strict_types=1);

namespace RalfLang\SatisPlugin;

class Command extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('satis:configure');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Executing');
    }
}