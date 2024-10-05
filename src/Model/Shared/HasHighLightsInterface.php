<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Shared;

use Inwebo\JsonResumeSchema\Model\Collection\Item\HighlightInterface;

interface HasHighLightsInterface
{
    /**
     * @return iterable<HighlightInterface>
     */
    public function getHighlights(): iterable;
}
