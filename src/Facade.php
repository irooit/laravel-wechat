<?php

/*
 * This file is part of the overtrue/laravel-wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Irooit\LaravelWeChat;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * Class Facade.
 *
 * @author overtrue <i@overtrue.me>
 */
class Facade extends LaravelFacade
{
    /**
     * 默认为 Server.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'wechat.official_account';
    }

    /**
     * @return \EasyWeChat\OfficialAccount\Application
     */
    public static function officialAccount($name = '')
    {
        return $name ? app('wechat.official_account.'.$name) : app('wechat.official_account');
    }

    /**
     * @return \EasyWeChat\Work\Application
     */
    public static function work($name = '')
    {
        return $name ? app('wechat.work.'.$name) : app('wechat.work');
    }

    /**
     * @return \EasyWeChat\Payment\Application
     */
    public static function payment($name = '')
    {
        return $name ? app('wechat.payment.'.$name) : app('wechat.payment');
    }

    /**
     * @return \EasyWeChat\MiniProgram\Application
     */
    public static function miniProgram($name = '')
    {
        return $name ? app('wechat.mini_program.'.$name) : app('wechat.mini_program');
    }

    /**
     * @return \EasyWeChat\OpenPlatform\Application
     */
    public static function openPlatform($name = '')
    {
        return $name ? app('wechat.open_platform.'.$name) : app('wechat.open_platform');
    }
}
