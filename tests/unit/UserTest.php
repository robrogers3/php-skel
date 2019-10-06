<?php

use PHPUnit\Framework\TestCase;
use App\User;
use App\CollectionMacros;

class UserTest extends TestCase
{

    /** @test */
    public function it_is_an_user()
    {
        $this->assertEquals(50,binToDec('110010'));
    }

    /** @test */
    public function build_messages()
    {
        $this->assertEquals("- one\n- two\n- three", build_comment(['one','two','three']));
    }

    /** @test */
    public function it_flatmaps()
    {
        $messages = [
            ['to' => ['rob', 'bob']],
            ['to' => ['joe']]
        ];

        $out = collect($messages)->flatMap(function($m) {
            return $m['to'];
        })->all();

        $this->assertEquals(['rob','bob','joe'], $out);
    }

    /** @test */
    public function it_does_macros()
    {
        CollectionMacros::init();
        $this->assertEquals([1,3], collect([1,2,3])->odd()->values()->all());

    }
}
