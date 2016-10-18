<?php
declare(strict_types=1);
namespace BarkaneArts\CAESAR;

/**
 * Interface AEADInterface
 * @package BarkaneArts\CAESAR
 */
interface AEADInterface
{
    /**
     * Authenticated encryption
     *
     * @param MessageInterface $message The message (wraps string/tuple)
     * @param KeyInterface     $key     The cryptography key
     * @param string           $nonce   Number to use once
     * @param string&          $tag     Optional; for detached authentication
     *                                  tags.
     * @return MessageInterface
     */
    public function aeadEncrypt(
        MessageInterface $message,
        KeyInterface     $key,
        string           $nonce,
        string           &$tag = ''
    ): MessageInterface;

    /**
     * Decryption
     *
     * @param MessageInterface $message The message (wraps string/tuple)
     * @param KeyInterface     $key     The cryptography key
     * @param string           $nonce   Number to use once
     * @param string&          $tag     Authentication tag (if detached)
     * @return MessageInterface
     */
    public function aeadDecrypt(
        MessageInterface $message,
        KeyInterface     $key,
        string           $nonce,
        string           $tag = ''
    ): MessageInterface;
}
