<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Shared;

interface HasUrlInterface
{
    /**
     * @return string
     */
    public function getUrl(): string;
}
