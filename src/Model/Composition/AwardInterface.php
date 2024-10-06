<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

interface AwardInterface
{
    /**
     * @return string Award
     */
    public function getTitle(): string;

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable;

    /**
     * @return string Company
     */
    public function getAwarder(): string;

    /**
     * @return string There is no spoon.
     */
    public function getSummary(): string;
}
