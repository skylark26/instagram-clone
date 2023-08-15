<?php

namespace Tests\Unit;

use Database\Seeders\PostSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_a_post(): void
    {
        $this->seed(PostSeeder::class);
        $this->assertDatabaseCount('posts', 1);
    }
}
