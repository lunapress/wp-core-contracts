<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgsIFactory;

defined('ABSPATH') || exit;

interface IWpDieArgsFactory extends IWpFunctionArgsIFactory
{
    public function make(): IIWpDieArgs;
}
