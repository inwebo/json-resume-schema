<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasNameInterface;

interface ReferenceInterface extends HasNameInterface
{
    /**
     * @return string Reference…
     */
    public function getReference(): string;
}
