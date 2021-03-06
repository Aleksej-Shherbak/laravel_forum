<?php

namespace Tests\Unit;

use App\Reply;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class ReplyTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_reply_has_owner()
    {
        $reply = factory(Reply::class)->create();

        $this->assertInstanceOf('App\User', $reply->owner);
    }
}
