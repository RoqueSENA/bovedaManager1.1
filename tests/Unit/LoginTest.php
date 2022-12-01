<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    /**
     * 
     *
     * @test
     */
    public function user_can_login()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
