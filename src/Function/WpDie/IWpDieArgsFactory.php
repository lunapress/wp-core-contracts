<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\Functions\WpDie;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgsFactory;
use LunaPress\Wp\CoreContracts\Functions\WpDie\IWpDieArgs;

defined('ABSPATH') || exit;

interface IWpDieArgsFactory extends IWpFunctionArgsFactory
{
    public function make(): IWpDieArgs;
}
