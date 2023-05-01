<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class userTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_redirect(){
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_addcart()
    {
        $response = $this->get('/addcart');
        $response->assertStatus(404);
    }

    public function test_showcart()
    {
       $response = $this->get('/showcart');
       $response->assertStatus(404);
 
    }

    public function test_remove()
    {
       $response = $this->get('/remove');
       $response->assertStatus(404);
 
    }

    public function test_orderconfirm()
    {
       $response = $this->get('/orderconfirm');
       $response->assertStatus(405);
 
    }


}