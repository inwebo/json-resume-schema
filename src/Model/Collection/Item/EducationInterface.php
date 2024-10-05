<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasDateIntervalInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasUrlInterface;

interface EducationInterface extends HasDateIntervalInterface, HasUrlInterface
{
    /**
     * @return string University
     */
    public function getInstitution(): string;

    /**
     * @return string Software Development
     */
    public function getArea(): string;

    /**
     * @return float 4.0
     */
    public function getScore(): float;

    /**
     * @return iterable<CourseInterface>
     */
    public function getCourses(): iterable;
}
