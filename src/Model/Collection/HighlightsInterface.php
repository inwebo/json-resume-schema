<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\HighlightInterface;

interface HighlightsInterface
{
    /**
     * @return iterable<HighlightInterface>
     */
    public function getHighlights(): iterable;
}
