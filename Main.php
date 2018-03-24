<?php

    namespace IdnoPlugins\PhotoIndex {
    
        class Main extends \Idno\Common\Plugin {

            function registerPages() {
                // register photo index page 
                \Idno\Core\site()->addPageHandler('/photos', '\IdnoPlugins\PhotoIndex\Pages\PhotoIndex');
            }
            
        }

    }
