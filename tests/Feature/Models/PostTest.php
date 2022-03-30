<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_post_all()
    {
        $response = $this->get('/post');

        $response->assertStatus(200);
    }

    public function test_show(){
       $id= 1;
      
       $response = $this->get('/post/'.$id);

        $response->assertStatus(200);

    }

}
