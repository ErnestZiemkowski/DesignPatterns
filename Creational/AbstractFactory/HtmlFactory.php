<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 23.01.18
 * Time: 22:22
 */

namespace DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }
}
