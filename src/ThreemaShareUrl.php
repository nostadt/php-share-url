<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl;

/**
 * @see https://threema.ch/en/faq/url_actions
 */
final readonly class ThreemaShareUrl implements \Stringable
{
    public function __construct(private string $text)
    {
    }

    public function __toString(): string
    {
        return 'https://threema.id/compose?text=' . urlencode($this->text);
    }
}