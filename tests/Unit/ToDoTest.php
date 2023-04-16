<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ToDoTest extends TestCase
{

    use RefreshDatabase;

    public function test_store_controller_validation()
    {
        // null
        $this->post('/to-do', ['name' => null])
            ->assertStatus(302);

        // empty string
        $this->post('/to-do', ['name' => ''])
            ->assertStatus(302);

        // over 255 characters
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';


        for ($i = 0; $i < 256; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        $this->post('/to-do', ['name' => $string])
            ->assertStatus(302);

    }

    public function test_analytics_controller_validation()
    {

    }
}
