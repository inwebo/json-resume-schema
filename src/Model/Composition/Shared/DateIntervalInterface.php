<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition\Shared;

interface DateIntervalInterface
{
    public function getStartDate(): \DateTimeImmutable;
    public function getEndDate(): \DateTimeImmutable;
}
