<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

use Inwebo\JsonResumeSchema\Model\Shared\HasKeyWordsInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasNameInterface;

interface SkillInterface extends HasNameInterface, HasKeyWordsInterface
{
    /**
     * @return string Master
     */
    public function getLevel(): string;
}
