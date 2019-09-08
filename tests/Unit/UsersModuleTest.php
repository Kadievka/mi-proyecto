<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersModuleTest extends TestCase
{


    /**
    *@test
    */
    function testExample()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }
    /**
    *@test
    */
    function it_shows_the_users_list()
    {

        /*$this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios')
        ->assertSee('Do')
        ->assertSee('Re')
        ->assertSee('Mi')
        ->assertSee('Fa')
        ->assertSee('Sol')
        ->assertSee('La')
        ->assertSee('Si')
        ->assertSee('<script>$kad="123321"</script>');*/

        factory (User::class)->create([
            'name'=>'Joel',
        ]);

        factory (User::class)->create([
            'name'=>'Ellie',
        ]);

        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios')
        ->assertSee('Joel')
        ->assertSee('Ellie');
        

    }


    /**
    *@test
    */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $response=DB::table('users')->truncate();

        $this->get('/usuarios')
        ->assertSee('Listado de Usuarios')
        ->assertSee('No hay usuarios registrados');
    }

    /**
    *@test
    */
    function it_shows_no_users_registered()
    {
        $this->get('/usuarios?empty')
        ->assertSee('Listado de Usuarios')
        ->assertSee('No hay usuarios registrados');
    }
    
}