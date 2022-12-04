<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Usuario;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    /**@test**/

    public function test_can_add_users()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/usuarios',[
            'codUser'=>'co000001',
            'nomUser'=>'AdminTest',
            'passUser'=>'12345',
            'rolUser'=>'Administrador',
        ]);

        $response->assertOk();
        $this->assertCount(1, Usuario::all());
    }

    /**@test**/

    public function test_all_fields_are_required()
    {
        //$this->withoutExceptionHandling();

        $response = $this->post('/usuarios',[
            'codUser'=>'',
            'nomUser'=>'',
            'passUser'=>'',
            'rolUser'=>''
        ]);

        $response->assertSessionHasErrors();

    }











}
