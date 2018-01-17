<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 15.01.18
 * Time: 21:16
 */

namespace DesignPatterns\Creational\StaticFactory;

final class StaticFactory
{
    /**
     * @param string $type
     * @return FormatterInterface
     */
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'boolean') {
            return new FormatBoolean();
        }

        if ($type == 'datetime') {
            return new FormatDateTime();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}