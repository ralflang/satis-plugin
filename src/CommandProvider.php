<?php

declare(strict_types=1);

namespace RalfLang\SatisPlugin;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
/**
 * Register commands for the Composer CLI
 */
class CommandProvider implements CommandProviderCapability
{
    public function getCommands()
    {
        return array(new Command);
    }
}