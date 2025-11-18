<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpKses;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpKsesIFactory extends IFactory
{
    public function make(string $content, array|string $allowedHtml): IWpKsesFunctionI;
}
