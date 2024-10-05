<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Shared;

interface HasNameInterface
{
    /**
     * @return string Jane Doe
     */
    public function getName(): string;
}
