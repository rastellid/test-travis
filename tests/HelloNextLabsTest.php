<?php

use PHPUnit\Framework\TestCase;
use NextLabs\HelloNextLabs;


class HelloNextLabsTest extends TestCase
{
    /**
     * @test
     */
    public function creazioneIstanza()
    {
        $hello = new HelloNextLabs();

        $this->assertEquals($hello->welcome(), 'Hi');
    }
}