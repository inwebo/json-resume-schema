<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection;

use Inwebo\JsonResumeSchema\Model\Collection\Item\SkillInterface;

interface SkillsInterface
{
    /**
     * @return iterable<SkillInterface>
     */
    public function getSkills(): iterable;
}
