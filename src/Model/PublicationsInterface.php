<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Composition\PublicationInterface;

interface PublicationsInterface
{
    /**
     * @return iterable<PublicationInterface>
     */
    public function getPublications(): iterable;
}
