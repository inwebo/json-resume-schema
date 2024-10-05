<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

interface LocationInterface
{
    /**
     * @return string 2712 Broadway St
     */
    public function getAddress(): string;

    /**
     * @return string CA 94115
     */
    public function getPostalCode(): string;

    /**
     * @return string San Francisco
     */
    public function getCity(): string;

    /**
     * @return string US
     */
    public function getCountryCode(): string;

    /**
     * @return string California
     */
    public function getRegion(): string;
}
