<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Composition\HighlightInterface;
use Inwebo\JsonResumeSchema\Model\Composition\Shared\DateIntervalInterface;

interface VolunteerInterface extends DateIntervalInterface
{
    /**
     * @return string Organization
     */
    public function getOrganization(): string;
    /**
     * @return string Volunteer
     */
    public function getPosition(): string;
    /**
     * @return string https://organization.com/
     */
    public function getUrl(): string;
    /**
     * @return string Description…
     */
    public function getSummary(): string;

    /**
     * @return iterable<HighlightInterface>
     */
    public function getHighlights(): iterable;
}
