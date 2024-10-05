<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\ProfileInterface;

interface ProjectsInterface
{
    /**
     * @return iterable<ProfileInterface>
     */
    public function getProfiles(): iterable;
}
