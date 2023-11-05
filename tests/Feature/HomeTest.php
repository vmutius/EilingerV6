<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function test_home_success(): void
    {
        $response = $this->get('/index');

        $response->assertStatus(200);
    }

    public function test_disclaimer_success(): void
    {
        $response = $this->get('/disclaimer');

        $response->assertStatus(200);
    }

    public function test_impressum_success(): void
    {
        $response = $this->get('/impressum');

        $response->assertStatus(200);
    }

    public function test_datenschutz_success(): void
    {
        $response = $this->get('/datenschutz');

        $response->assertStatus(200);
    }
}
