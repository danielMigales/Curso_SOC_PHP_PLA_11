<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CargaVistasTest extends TestCase
{
    public function test_gestion()
    {
        $response = $this->get('/gestion');

        $response->assertStatus(200);
    }

    public function test_altaMtoPuntos()
    {
        $response = $this->get('/altaMtoPuntos');

        $response->assertStatus(200);
    }

    public function test_altaPersonas()
    {
        $response = $this->get('/altaPersonas');

        $response->assertStatus(200);
    }

    public function test_altaMovimientos()
    {
        $response = $this->get('/altaMovimientos');

        $response->assertStatus(200);
    }

    public function test_consultaMovimientos()
    {
        $response = $this->get('/consultaMovimientos');

        $response->assertStatus(200);
    }

    public function test_detalleMovimiento()
    {
        $response = $this->get('/detalleMovimiento');

        $response->assertStatus(200);
    }
}
