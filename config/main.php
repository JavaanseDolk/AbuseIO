<?php

/*
 * Do not edit this file, but create a similair file in the config subfolder production with the config elements
 * you wish to override. The items you will not define in your custom config file will use the below defaults
 */

return [

    'interface' => [
        'language'   => 'en',
        'navigation' => [
            'home'      => 'fa-home',
            'contacts'  => 'fa-users',
            'netblocks' => 'fa-gg',
            'domains'   => 'fa-globe',
            'tickets'   => 'fa-ticket',
            'analytics' => 'fa-bar-chart',
        ],
    ],

    'emailparser' => [
        'fallback_mail'      => 'admin@isp.local',
        'use_bounce_method'  => false,
        'notify_on_warnings' => true,
    ],

    // A list of installation UUID's which are considered to be parents allowing them to push events thru the API
    // as well as sync notes and retrieve this child's status updates on tickets.
    'parent_instances' => [

    ],

    'reports' => [
        'min_lastseen'    => false, //This ignores any event older then threshold
        'resolvable_only' => false, // This drops anything if a domain or netblock cannot be found
    ],

    'notes' => [
        'enabled'              => true,
        'deletable'            => true,
        'show_abusedesk_names' => true,
    ],

    'notifications' => [
        'enabled'        => true,
        'info_interval'  => '90 days',
        'abuse_interval' => '0 minutes',
        'min_lastseen'   => '14 days',
        'from_address'   => 'abuse@isp.local',
        'from_name'      => 'ISP Abusedesk',
        'bcc_enabled'    => false,
        'bcc_address'    => 'management@isp.local',
    ],

    'housekeeping' => [
        'mailarchive_remove_after'        => '500 days',
        'mailarchive_remove_orphaned'     => true,
        'tickets_close_after'             => '14 days',
        'closed_tickets_remove_after'     => false,
        'closed_tickets_remove_permanent' => false,
        'notifications_cron'              => '*/15 * * * * *',
        'collectors_cron'                 => '*/60 * * * * *',
        'housekeeper_cron'                => '*/1 * * * * *',
        'collect_statistics_cron'         => '0 2 * * * *', //needs some discussion on when to run;
        'enable_queue_problem_alerts'     => true,
    ],

    'ash' => [
        'url' => env('APP_URL', 'http://localhost').'/ash/',
    ],

    'external' => [
        'findcontact' => [
            'id' => [
                'prefer_local' => true,
                [
                    'class'  => 'Custom',
                    'method' => 'getContactById',
                ],
            ],
            'ip' => [
                'prefer_local' => true,
                [
                    'class'  => 'Custom',
                    'method' => 'getContactByIp',
                ],
            ],
            'domain' => [
                'prefer_local' => true,
                [
                    'class'  => 'Custom',
                    'method' => 'getContactByDomain',
                ],
            ],
        ],
    ],

    'api' => [
        'enabled' => true,
    ],
];
