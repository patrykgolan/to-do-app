<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_redirect()
    {
        $this->get('/')->assertRedirectToRoute('to-do.index');
    }

    public function test_to_do_get()
    {

        $this->get('/to-do')->assertStatus(200);

    }

    public function test_analytics_get()
    {
        $this->get('analytics')->assertStatus(200);
    }

}
