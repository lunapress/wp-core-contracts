<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpKses;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpKsesFunction extends IExecutableFunction
{
    public function content(string $content): self;

    public function allowedHtml(array|string $allowedHtml): self;

    public function allowedProtocols(array|WpArgState $allowedProtocols): self;

    public function executeWithArgs(array $args): string;
}
