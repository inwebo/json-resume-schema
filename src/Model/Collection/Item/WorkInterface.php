<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasDateIntervalInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasHighLightsInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasNameInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasSummaryInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasUrlInterface;

interface WorkInterface extends HasDateIntervalInterface, HasUrlInterface, HasHighLightsInterface, HasNameInterface, HasSummaryInterface
{
    /**
     * @return string President
     */
    public function getPosition(): string;
}
