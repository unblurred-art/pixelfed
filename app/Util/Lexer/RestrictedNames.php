<?php

namespace App\Util\Lexer;

class RestrictedNames
{
    public static $blacklist = [
     'about',
     'abuse',
     'administrator',
     'app',
     'autoconfig',
     'blog',
     'broadcasthost',
     'community',
     'contact',
     'contact-us',
     'contact_us',
     'copyright',
     'd',
     'dashboard',
     'dev',
     'developer',
     'developers',
     'discover',
     'discovers',
     'doc',
     'docs',
     'download',
     'domainadmin',
     'domainadministrator',
     'email',
     'errors',
     'events',
     'example',
     'faq',
     'faqs',
     'features',
     'ftp',
     'guest',
     'guests',
     'hostmaster',
     'hostmaster',
     'image',
     'images',
     'imap',
     'img',
     'info',
     'info',
     'is',
     'isatap',
     'it',
     'localdomain',
     'localhost',
     'mail',
     'mailer-daemon',
     'mailerdaemon',
     'marketing',
     'me',
     'media',
     'mis',
     'mx',
     'new',
     'news',
     'news',
     'no-reply',
     'nobody',
     'noc',
     'noreply',
     'ns0',
     'ns1',
     'ns2',
     'ns3',
     'ns4',
     'ns5',
     'ns6',
     'ns7',
     'ns8',
     'ns9',
     'owner',
     'pop',
     'pop3',
     'postmaster',
     'pricing',
     'privacy',
     'root',
     'sales',
     'security',
     'signin',
     'signout',
     'smtp',
     'src',
     'ssladmin',
     'ssladministrator',
     'sslwebmaster',
     'sys',
     'sysadmin',
     'system',
     'terms',
     'tutorial',
     'tutorials',
     'usenet',
     'uucp',
     'webmaster',
     'wpad',
   ];

    public static $reserved = [
     // Reserved for instance admin
     'admin',
     'administrator',

     // Static Assets
     'assets',
     'storage',

     // Laravel Horizon
     'horizon',

     // Reserved routes
     'account',
     'api',
     'auth',
     'broadcast',
     'broadcaster',
     'css',
     'checkpoint',
     'collection',
     'collections',
     'c',
     'cdn',
     'dashboard',
     'deck',
     'discover',
     'docs',
     'error',
     'explore',
     'fonts',
     'home',
     'help',
     'helpcenter',
     'i',
     'img',
     'js',
     'live',
     'login',
     'logout',
     'media',
     'official',
     'p',
     'password',
     'reset',
     'report',
     'reports',
     'robot',
     'robots',
     'search',
     'send',
     'settings',
     'status',
     'statuses',
     'site',
     'sites',
     'static',
     'story',
     'stories',
     'support',
     'telescope',
     'timeline',
     'timelines',
     'tour',
     'user',
     'users',
     'vendor',
     'ws',
     'wss',
     'www',
     '400',
     '401',
     '403',
     '404',
     '500',
     '503',
     '504',
  ];

    public static function get()
    {
        $reserved = $blacklist = [];

        if (true == config('pixelfed.restricted_names.use_blacklist')) {
            $blacklist = self::$blacklist;
        }

        if (true == config('pixelfed.restricted_names.reserved_routes')) {
            $reserved = self::$reserved;
        }

        return array_merge($blacklist, $reserved);
    }
}
