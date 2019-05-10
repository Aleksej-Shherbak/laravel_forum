<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ReadThreadsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_see_all_threads()
    {
        $thread = factory(Thread::class)->create();

        $response = $this->get(route('threads'));

        $response->assertSee($thread->title);
    }

    /** @test */
    public function a_user_can_see_a_single_thread()
    {
        $thread = factory(Thread::class)->create();

        $response = $this->get(route('thread', $thread));

        $response->assertSee($thread->title);
    }


}
