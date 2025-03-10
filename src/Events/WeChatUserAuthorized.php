<?php

/*
 * This file is part of the overtrue/laravel-wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Irooit\LaravelWeChat\Events;

use Illuminate\Queue\SerializesModels;
use Irooit\Socialite\User;

class WeChatUserAuthorized
{
    use SerializesModels;

    public $user;

    public $isNewSession;

    public $account;

    /**
     * Create a new event instance.
     *
     * @param \Irooit\Socialite\User $user
     * @param bool                     $isNewSession
     */
    public function __construct(User $user, $isNewSession = false, string $account)
    {
        $this->user = $user;
        $this->isNewSession = $isNewSession;
        $this->account = $account;
    }

    /**
     * Retrieve the authorized user.
     *
     * @return \Irooit\Socialite\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * The name of official account.
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Check the user session is first created.
     *
     * @return bool
     */
    public function isNewSession()
    {
        return $this->isNewSession;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
