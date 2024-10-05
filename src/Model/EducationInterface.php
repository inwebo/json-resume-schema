<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Composition\EducationInterface as ItemEducationInterface;

interface EducationInterface
{
    /**
     * @return iterable<ItemEducationInterface>
     */
    public function getEducation(): iterable;
}
