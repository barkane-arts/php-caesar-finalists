<?php
declare(strict_types=1);
namespace BarkaneArts\CAESAR;

/**
 * Interface MessageInterface
 * @package BarkaneArts\CAESAR
 */
interface MessageInterface
{
    /**
     * @return string[]
     */
    public function getComponents(): array;

    /**
     * @return bool
     */
    public function isCiphertext(): bool;
}
