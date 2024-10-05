<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\HighlightInterface;

interface InterestsInterface
{
    /**
     * @return iterable<HighlightInterface>
     */
    public function getInterests(): iterable;
}
