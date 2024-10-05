<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\ReferenceInterface;

interface ReferencesInterface
{
    /**
     * @return iterable<ReferenceInterface>
     */
    public function getReferences(): iterable;
}
