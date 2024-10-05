<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Composition\WorkInterface as ItemWorkInterface;

interface WorkInterface
{
    /**
     * @return iterable<ItemWorkInterface>
     */
    public function getWorks(): iterable;
}
