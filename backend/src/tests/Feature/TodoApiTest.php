<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TodoApiTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }
    /** @test */
    public function it_can_create_a_todo()
    {
        $response = $this->postJson('/api/list', [
            'name' => 'Test Todo4',
            'email' => 'This is a test todo5',
            'password' => '0916Kimura'
        ]);

        $response->assertStatus(200); // 成功時のステータスコード
        $this->assertDatabaseHas('users', [
            'name' => 'Test Todo4',
        ]);
    }
}
