<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_task_created_success(): void
    {
        $response = $this->post(route('tasks.store'), [
            'title' => 'Test Task',
            'description' => 'This is a test task description.',
            'status' => 'pending',
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('tasks', [
            'title' => 'Test Task',
            'description' => 'This is a test task description.',
            'status' => 'pending',
        ]);
    }
}
