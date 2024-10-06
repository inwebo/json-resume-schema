<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Composition\AwardInterface;

interface AwardsInterface
{
    /**
     * @return iterable<AwardInterface>
     */
    public function getAwards(): iterable;
}
