<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Jesus Ordosgoitty · Software Developer", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "Full-Stack Software Developer based in Venezuela | React.js, Laravel, Node.js, Express.js, MongoDB, PostgreSQL and more",
            'separator'    => ' - ',
            'keywords'     => ['Venezuela', 'Software Developer', 'LATAM', 'PHP', 'Laravel', 'React', 'Engineer'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Jesus Ordosgoitty · Software Developer', // set false to total remove
            'description'  => "Full-Stack Software Developer based in Venezuela | React.js, Laravel, Node.js, Express.js, MongoDB, PostgreSQL and more",
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'Jesus Ordosgoitty · Software Developer',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@jodaz_',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Jesus Ordosgoitty · Software Developer', // set false to total remove
            'description' => "Full-Stack Software Developer based in Venezuela | React.js, Laravel, Node.js, Express.js, MongoDB, PostgreSQL and more", // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
