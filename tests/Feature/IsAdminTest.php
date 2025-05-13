<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class IsAdminTest extends TestCase
{
    use RefreshDatabase; // <-- ВАЖНО

    public function test_admin_can_access_console_page()
    {
        $user = User::factory()->create([
            'role' => 'admin',
        ]);

        $response = $this->actingAs($user)->get('/console');

        $response->assertStatus(200);
    }

    public function test_user_can_access_console_page()
    {
        $user = User::factory()->create([
            'role' => 'user',
        ]);
        $response = $this->actingAs($user)->get('/console');

        $response->assertStatus(302);
    }

    public function test_guest_can_access_console_page()
    {
        $response = $this->get('/console');

        $response->assertStatus(302);
    }

}
