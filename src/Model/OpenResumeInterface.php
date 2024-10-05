<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Collection\AwardsInterface;
use Inwebo\JsonResumeSchema\Model\Collection\CertificatesInterfaces;
use Inwebo\JsonResumeSchema\Model\Collection\EducationsInterface;
use Inwebo\JsonResumeSchema\Model\Collection\InterestsInterface;
use Inwebo\JsonResumeSchema\Model\Collection\LanguagesInterface;
use Inwebo\JsonResumeSchema\Model\Collection\ProjectsInterface;
use Inwebo\JsonResumeSchema\Model\Collection\PublicationsInterface;
use Inwebo\JsonResumeSchema\Model\Collection\SkillsInterface;
use Inwebo\JsonResumeSchema\Model\Collection\VolunteersInterface;
use Inwebo\JsonResumeSchema\Model\Collection\WorksInterface;

interface OpenResumeInterface
{
    public function getBasics(): BasicsInterface;
    public function getWorks(): WorksInterface;
    public function getVolunteers(): VolunteersInterface;
    public function getEducations(): EducationsInterface;
    public function getAwards(): AwardsInterface;
    public function getCertificates(): CertificatesInterfaces;
    public function getPublications(): PublicationsInterface;
    public function getSkills(): SkillsInterface;
    public function getLanguages(): LanguagesInterface;
    public function getInterests(): InterestsInterface;
    public function getProjects(): ProjectsInterface;
}
