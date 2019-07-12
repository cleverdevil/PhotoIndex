<?php

    namespace IdnoPlugins\PhotoIndex {
    
        class Main extends \Idno\Common\Plugin {

            function registerPages() {
                // register photo index page 
                \Idno\Core\site()->routes()->addRoute('/photos', '\IdnoPlugins\PhotoIndex\Pages\PhotoIndex');
            }
            
        }

    }
