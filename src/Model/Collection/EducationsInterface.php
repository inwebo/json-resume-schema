<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\EducationInterface as ItemEducationInterface;

interface EducationsInterface
{
    /**
     * @return iterable<ItemEducationInterface>
     */
    public function getEducation(): iterable;
}
