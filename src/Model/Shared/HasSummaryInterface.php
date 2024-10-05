<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Shared;

interface HasSummaryInterface
{
    /**
     * @return string A summary
     */
    public function getSummary(): string;
}
