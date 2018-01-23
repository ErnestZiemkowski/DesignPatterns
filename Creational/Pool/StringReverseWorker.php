<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 23.01.18
 * Time: 07:56
 */

namespace DesignPatterns\Creational\Pool;

class StringReverseWorker
{
    /**
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}