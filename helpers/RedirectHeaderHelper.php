<?php


namespace app\helpers;


/**
 * NOTE:
 *
 * Helper for to redirecting users
 *
 * @package app\helpers
 */
class RedirectHeaderHelper
{
    public static function redirect(int $timeout, string $url)
    {
        return header("refresh: {$timeout}; url={$url}");
    }
}
