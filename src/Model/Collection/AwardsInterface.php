<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\AwardInterface;

interface AwardsInterface
{
    /**
     * @return iterable<AwardInterface>
     */
    public function getAwards(): iterable;
}
