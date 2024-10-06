<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

interface PublicationInterface
{
    /**
     * @return string Publication
     */
    public function getName(): string;
    /**
     * @return string Company
     */
    public function getPublisher(): string;
    public function getReleaseDate(): \DateTimeImmutable;
    /**
     * @return string https://publication.com
     */
    public function getUrl(): string;

    /**
     * @return string Description…
     */
    public function getSummary(): string;
}
