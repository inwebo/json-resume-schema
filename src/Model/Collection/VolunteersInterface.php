<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\VolunteerInterface;

interface VolunteersInterface
{
    /**
     * @return iterable<VolunteerInterface>
     */
    public function getVolunteers(): iterable;
}
