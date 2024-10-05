<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Collection\Item\ProfileInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasNameInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasSummaryInterface;
use Inwebo\JsonResumeSchema\Model\Shared\HasUrlInterface;

interface BasicsInterface extends HasUrlInterface, HasSummaryInterface, HasNameInterface
{
    /**
     * @return string Programmer
     */
    public function getLabel(): string;
    /**
     * @return string filepath, url
     */
    public function getImage(): string;
    /**
     * @return string john@gmail.com
     */
    public function getEmail(): string;
    /**
     * @return string (912) 555-4321
     */
    public function getPhone(): string;
    public function getLocation(): LocationInterface;
    /**
     * @return iterable<ProfileInterface>
     */
    public function getProfiles(): iterable;
}
