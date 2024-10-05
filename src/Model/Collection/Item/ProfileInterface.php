<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasUrlInterface;

interface ProfileInterface extends HasUrlInterface
{
    /**
     * @return string Twitter
     */
    public function getNetwork(): string;

    /**
     * @return string john
     */
    public function getUserName(): string;
}
