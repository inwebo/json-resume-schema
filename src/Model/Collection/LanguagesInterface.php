<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\LanguageInterface;

interface LanguagesInterface
{
    /**
     * @return iterable<LanguageInterface>
     */
    public function getLanguages(): iterable;
}
