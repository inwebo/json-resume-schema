<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasNameInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasSummaryInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasUrlInterface;

interface PublicationInterface extends HasNameInterface, HasUrlInterface, HasSummaryInterface
{
    /**
     * @return string Company
     */
    public function getPublisher(): string;
    public function getReleaseDate(): \DateTimeImmutable;
}
