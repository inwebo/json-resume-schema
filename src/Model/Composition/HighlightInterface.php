<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

interface HighlightInterface
{
    /**
     * @return string Started the company
     */
    public function getName(): string;
}
