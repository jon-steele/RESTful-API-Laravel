<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NoteAPITest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function notes_index_check(): void
    {
        $response = $this->get('/api/notes');

        $response->assertStatus(200);
    }

    public function notes_store_check(): void {
        $response = $this->get('/api/notes');

        $response->assertStatus(200);
    }
    public function notes_show_check(): void {
        $response = $this->get('/api/notes');

        $response->assertStatus(200);
    }
    public function notes_update_check(): void {
        $response = $this->get('/api/notes');

        $response->assertStatus(200);
    }
    public function notes_destroy_check(): void {

    }
}
