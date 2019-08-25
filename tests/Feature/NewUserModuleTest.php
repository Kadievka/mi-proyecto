<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewUserModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test void
     */
    function it_shows_the_newusers()
    {
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear Nuevo Usuario');

    }
}
