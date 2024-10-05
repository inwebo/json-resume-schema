<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasNameInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasUrlInterface;

interface CertificateInterface extends HasNameInterface, HasUrlInterface
{
    /**
     * @return \DateTimeImmutable 2019-01-01
     */
    public function getDate(): \DateTimeImmutable;

    /**
     * @return string Company
     */
    public function getIssuer(): string;
}
