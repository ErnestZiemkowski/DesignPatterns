<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 23.01.18
 * Time: 22:18
 */

namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text
{
    /**
     * @var string
     */
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
