<?php

declare(strict_types=1);


namespace Inwebo\JsonResumeSchema\Model\Composition;

interface CoursesInterface
{
    /**
     * @return iterable<CourseInterface>
     */
    public function getCourses(): iterable;
}