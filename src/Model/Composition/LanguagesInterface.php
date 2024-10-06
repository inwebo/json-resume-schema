<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Composition;

interface LanguagesInterface
{
    /**
     * @return iterable<LanguagesInterface>
     */
    public function getLanguages(): iterable;
}
