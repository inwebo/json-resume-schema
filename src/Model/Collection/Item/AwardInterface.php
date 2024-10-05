<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasSummaryInterface;

interface AwardInterface extends HasSummaryInterface
{
    /**
     * @return string Award
     */
    public function getTitle(): string;
    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable;
    /**
     * @return string Company
     */
    public function getAwarder(): string;
}
