<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Shared;

use Inwebo\JsonResumeSchema\Model\Collection\Item\KeywordInterface;

interface HasKeyWordsInterface
{
    /**
     * @return iterable<KeywordInterface>
     */
    public function getKeyWords(): iterable;
}
