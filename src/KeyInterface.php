<?php
declare(strict_types=1);
namespace BarkaneArts\CAESAR;

/**
 * Interface KeyInterface
 * @package BarkaneArts\CAESAR
 */
interface KeyInterface
{
    /**
     * @return self
     */
    public static function generate(): KeyInterface;
}
