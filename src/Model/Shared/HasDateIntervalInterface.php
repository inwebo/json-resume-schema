<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Shared;

interface HasDateIntervalInterface
{
    public function getStartDate(): \DateTimeImmutable;
    public function getEndDate(): ?\DateTimeImmutable;
}
