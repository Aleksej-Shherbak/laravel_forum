<?php

namespace Tests\Unit;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_thread_has_a_creator()
    {
        $thread = factory(Thread::class)->create();

        $this->assertInstanceOf('App\User', $thread->owner);
    }
}
