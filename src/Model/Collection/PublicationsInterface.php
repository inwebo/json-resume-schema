<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\PublicationInterface;

interface PublicationsInterface
{
    /**
     * @return iterable<PublicationInterface>
     */
    public function getPublications(): iterable;
}
