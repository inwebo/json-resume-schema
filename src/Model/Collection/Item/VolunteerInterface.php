<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasDateIntervalInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasHighLightsInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasSummaryInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasUrlInterface;

interface VolunteerInterface extends HasDateIntervalInterface, HasUrlInterface, HasHighLightsInterface, HasSummaryInterface
{
    /**
     * @return string Organization
     */
    public function getOrganization(): string;
    /**
     * @return string Volunteer
     */
    public function getPosition(): string;
}
