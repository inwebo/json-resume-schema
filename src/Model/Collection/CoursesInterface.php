<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\CourseInterface;

interface CoursesInterface
{
    /**
     * @return iterable<CourseInterface>
     */
    public function getCourses(): iterable;
}
