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

    function it_loads_all_the_users()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Do')
        ->assertSee('Re')
        ->assertSee('Mi')
        ->assertSee('Fa')
        ->assertSee('Sol')
        ->assertSee('La')
        ->assertSee('Si')
        ->assertSee('<script>$kad="123321"</script>')
        ->assertSee('Listado de Usuarios');

    }
}
