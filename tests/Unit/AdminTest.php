<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class adminTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_deletemenu(){
        $response = $this->get('/deleteticket');
        $response->assertStatus(404);
    }

    public function test_updatemenu(){
        $response = $this->get('/update');
        $response->assertStatus(404);
    }

    public function test_deleteuser(){
        $response = $this->get('/deleteuser');
        $response->assertStatus(404);
    }

    public function test_foodmenu(){
        $response = $this->get('/tickectmenu');
        $response->assertStatus(500);
    }

    public function test_upload(){
        $response = $this->get('/uploadticket');
        $response->assertStatus(405);
    }

}