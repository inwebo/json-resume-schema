<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

interface CertificateInterface
{
    /**
     * @return string Certificate
     */
    public function getName(): string;
    public function getDate(): \DateTimeImmutable;

    /**
     * @return string Company
     */
    public function getIssuer(): string;

    /**
     * @return string https://certificate.com
     */
    public function getUrl(): string;
}
