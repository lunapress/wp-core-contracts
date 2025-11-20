<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpDieArgs extends IWpFunctionArgs
{
    public function response(int|WpArgState $response): self;
    public function linkUrl(string|WpArgState $url): self;
    public function linkText(string|WpArgState $text): self;
    public function backLink(bool|WpArgState $enabled): self;
    public function textDirection(string|WpArgState $direction): self;
    public function charset(string|WpArgState $charset): self;
    public function code(string|WpArgState $code): self;
    public function exit(bool|WpArgState $exit): self;

    public function getResponse(): int|WpArgState;
    public function getLinkUrl(): string|WpArgState;
    public function getLinkText(): string|WpArgState;
    public function getBackLink(): bool|WpArgState;
    public function getTextDirection(): string|WpArgState;
    public function getCharset(): string|WpArgState;
    public function getCode(): string|WpArgState;
    public function getExit(): bool|WpArgState;
}
