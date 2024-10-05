<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

interface ProfileInterface
{
    /**
     * @return string Twitter
     */
    public function getNetwork(): string;

    /**
     * @return string john
     */
    public function getUserName(): string;

    /**
     * @return string https://twitter.com/john
     */
    public function getUrl(): string;
}
