<?php

declare(strict_types=1);


namespace Inwebo\JsonResumeSchema\Model\Composition;

interface CourseInterface
{
    /**
     * @return string DB1101 - Basic SQL
     */
    public function getName(): string;
}