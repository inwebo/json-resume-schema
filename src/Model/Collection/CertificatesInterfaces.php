<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\CertificateInterface;

interface CertificatesInterfaces
{
    /**
     * @return iterable<CertificateInterface>
     */
    public function getCertificates(): iterable;
}
