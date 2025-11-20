<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\Wp\CoreContracts\IWpError;
use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpDieFunction extends IExecutableFunction
{
    public function message(string|IWpError|WpArgState $message): self;
    public function title(string|int|WpArgState $title): self;
    public function args(IWpDieArgs|WpArgState $args): self;

    public function getMessage(): string|IWpError|WpArgState;
    public function getTitle(): string|int|WpArgState;
    public function getArgs(): IWpDieArgs|WpArgState;

    public function executeWithArgs(array $args): never;
}
