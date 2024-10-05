<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

use Inwebo\JsonResumeSchema\Model\Composition\Shared\DateIntervalInterface;

interface WorkInterface extends DateIntervalInterface
{
    /**
     * @return string Company
     */
    public function getName(): string;

    /**
     * @return string President
     */
    public function getPosition(): string;

    /**
     * @return string https://company.com
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
