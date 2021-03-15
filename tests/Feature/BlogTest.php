<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
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

    
    
    
    public function test_blog_get_id_request(){

        $response = $this->get('/post/21013567');

        $response->assertStatus(200);
    }

    public function test_blog_get_unexisted_value(){
        
        $response = $this->get('/post/25149876');

        $response->assertStatus(404);
    }

    public function test_blog_check_response(){

        $response = $this->get('/post/21013567');

        $response->assertViewHas('post');

    }
}
