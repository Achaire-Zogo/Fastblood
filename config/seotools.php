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
            'title'        => "FastBlood for Blood donation", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'FastBlood.0 is a web application that permit to give and have Blood over Cameroon', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                'Fastblood',
                'fast',
                'blood',
                'programme elargi de Don de Sang',
                'Sang',
                'Ministere de la santé',
                'GAVI',
                'UNICEF',
            ],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
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
            'title'        => "PROVARESSCORE2.0 an immunization web application in the eight regions of Cameroon", // set false to total remove
            'description'  => 'PROVARESSCORE2.0 is a web application that aims at managing the immunization situation in the eight regions of Cameroon. It can also be used by another organizations', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'        => "PROVARESSCORE2.0 an immunization web application in the eight regions of Cameroon", // set false to total remove
            'description'  => 'PROVARESSCORE2.0 is a web application that aims at managing the immunization situation in the eight regions of Cameroon. It can also be used by another organizations', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
