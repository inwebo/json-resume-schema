<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

interface HighlightInterface
{
    /**
     * @return string Started the company, Awarded Volunteer of the Month
     */
    public function getName(): string;
}
