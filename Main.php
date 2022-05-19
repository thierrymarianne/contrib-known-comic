<?php

namespace IdnoPlugins\Comic {

    class Main extends \Idno\Common\Plugin
    {

        function registerPages()
        {
            \Idno\Core\Idno::site()->routes()->addRoute('/comic/edit/?', '\IdnoPlugins\Comic\Pages\Edit');
            \Idno\Core\Idno::site()->routes()->addRoute('/comic/edit/:id/?', '\IdnoPlugins\Comic\Pages\Edit');
            \Idno\Core\Idno::site()->routes()->addRoute('/comic/delete/:id/?', '\IdnoPlugins\Comic\Pages\Delete');
            \Idno\Core\Idno::site()->routes()->addRoute('/comic/:id/.*', '\Idno\Pages\Entity\View');
        }

        function registerTranslations()
        {

            \Idno\Core\Idno::site()->language()->register(
                new \Idno\Core\GetTextTranslation(
                    'comic', dirname(__FILE__) . '/languages/'
                )
            );
        }
    }

}

