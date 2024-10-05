<?php

declare(strict_types=1);

namespace Inwebo\JsonResumeSchema\Model\Collection\Item;

interface LanguageInterface
{
    /**
     * @return string English
     */
    public function getLanguage(): string;

    /**
     * @return string Native speaker
     */
    public function getFluency(): string;
}
