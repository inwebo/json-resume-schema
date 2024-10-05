<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\WorkInterface;

interface WorksInterface
{
    /**
     * @return iterable<WorkInterface>
     */
    public function getWorks(): iterable;
}
