<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Composition\SkillInterface;

interface SkillsInterface
{
    /**
     * @return iterable<SkillInterface>
     */
    public function getSkills(): iterable;
}
