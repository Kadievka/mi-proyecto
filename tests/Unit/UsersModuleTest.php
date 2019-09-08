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
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios')
        ->assertSee('No hay usuarios registrados');
    }

    /**
    *@test
    */
    function it_shows_no_users_registered()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios')
        ->assertSee('No hay usuarios registrados');
    }
    
    /**
    *@test
    */
    function it_loads_the_user_details_page()
    {
        $user=factory (User::class)->create([
            'name'=>'Kadievka Salcedo',
        ]);
        $this->get('/usuarios/'.$user->id)
        ->assertStatus(200)
        ->assertSee('Kadievka Salcedo')
        ->assertSee('Detalles del Usuario #'.$user->id);

        $response=DB::table('users')->truncate();
    }

    /**
    *@test
    */
    function it_displays_a_404_error_if_the_user_is_not_found()
    {
        $this->get('/usuarios/999')
        ->assertStatus(404)
        ->assertSee('Página no encontrada');
    }


    /**
    *@test
    */

    function it_creates_a_new_user(){
        
        $this->withoutExceptionHandling();

        $this->post('/usuarios/crear',[
            'name'=>'Ren',
            'email'=>'ren@example.com',
            'password'=>bcrypt('123456')
        ])->assertRedirect('/usuarios');

        $this->assertDatabaseHas('users',[
            'name'=>'Ren',
            'email'=>'ren@example.com'
        ]);

        $response=DB::table('users')->truncate();

    }


    /**
    *@test
    */

    function the_name_is_required(){
        $this->from('/usuarios/nuevo')
        ->post('/usuarios/crear',[
            'name'=>'',
            'email'=>'ren@example.com',
            'password'=>bcrypt('123456')
        ])->assertRedirect('/usuarios/nuevo')
        ->assertSessionHasErrors(['name']);

        $this->assertEquals(0,User::count());
    }

    /**
    *@test
    */

    function the_email_is_required(){
        $this->from('/usuarios/nuevo')
        ->post('/usuarios/crear',[
            'name'=>'Ren',
            'email'=>'',
            'password'=>bcrypt('123456')
        ])->assertRedirect('/usuarios/nuevo')
        ->assertSessionHasErrors(['email']);

        $this->assertEquals(0,User::count());
    }

    /**
    *@test
    */

    function the_password_is_required(){
        $this->from('/usuarios/nuevo')
        ->post('/usuarios/crear',[
            'name'=>'Ren',
            'email'=>'ren@example.com',
            'password'=>'',
        ])->assertRedirect('/usuarios/nuevo')
        ->assertSessionHasErrors(['password']);

        $this->assertEquals(0,User::count());
    }

}