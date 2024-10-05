<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasDateIntervalInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasHighLightsInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasNameInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasUrlInterface;

interface ProjectInterface extends HasDateIntervalInterface, HasUrlInterface, HasNameInterface, HasHighLightsInterface
{
    /**
     * @return string Description...
     */
    public function getDescription(): string;
}
