<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

use Inwebo\JsonResumeSchema\Model\Composition\Shared\DateIntervalInterface;

interface EducationInterface extends DateIntervalInterface
{
    /**
     * @return string University
     */
    public function getInstitution(): string;
    public function getUrl(): string;

    /**
     * @return string Software Development
     */
    public function getArea(): string;

    /**
     * @return float 4.0
     */
    public function getScore(): float;
}
