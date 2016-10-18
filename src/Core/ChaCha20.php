<?php
declare(strict_types=1);

namespace BarkaneArts\CAESAR\Core;

use BarkaneArts\CAESAR\KeyInterface;

/**
 * Trait ChaCha20
 * @package BarkaneArts\CAESAR\Core
 */
trait ChaCha20
{
    /**
     * @param KeyInterface $key
     * @param string $nonce
     * @param int $num
     * @return string
     */
    public function chaCha20KeyBytes(KeyInterface $key, string $nonce, int $num): string
    {
        /**
         * @todo implement
         */
        return '';
    }
}
