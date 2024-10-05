<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model;

use Inwebo\JsonResumeSchema\Model\Composition\ProfileInterface;

interface BasicsInterface
{
    /**
     * @return string John Doe
     */
    public function getName(): string;

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

    /**
     * @return string https://johndoe.com
     */
    public function getUrl(): string;

    /**
     * @return string A summary of John Doe…
     */
    public function getSummary(): string;
    public function getLocation(): LocationInterface;

    /**
     * @return iterable<ProfileInterface>
     */
    public function getProfiles(): iterable;
}
