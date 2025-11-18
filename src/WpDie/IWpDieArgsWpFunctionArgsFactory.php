<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgsFactory;

defined('ABSPATH') || exit;

interface IWpDieArgsWpFunctionArgsFactory extends IWpFunctionArgsFactory
{
    public function make(): IIWpDieArgs;
}
