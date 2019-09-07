<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    function testExample()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }

    function it_shows_the_users_list()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios')
        ->assertSee('Do')
        ->assertSee('Re')
        ->assertSee('Mi')
        ->assertSee('Fa')
        ->assertSee('Sol')
        ->assertSee('La')
        ->assertSee('Si')
        ->assertSee('<script>$kad="123321"</script>');

    }

    function it_shows_no_users_registered()
    {
        $this->get('/usuarios?empty')
        ->assertSee('Listado de Usuarios')
        ->assertSee('No hay usuarios registrados');
    }

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
