<?php

    namespace IdnoPlugins\PhotoIndex\Pages {

        class PhotoIndex extends \Idno\Common\Page
        {

            function getContent()
            {
                
                if (!empty(\Idno\Core\Idno::site()->config()->description)) {
                    $description = \Idno\Core\Idno::site()->config()->description;
                } else {
                    $description = 'An independent social website, powered by Known.';
                }
                $description = $description . ": Photos";

                if (!empty(\Idno\Core\Idno::site()->config()->homepagetitle)) {
                    $title = \Idno\Core\Idno::site()->config()->homepagetitle;
                } else {
                    $title = \Idno\Core\Idno::site()->config()->title;
                }
                $title = $title . ": Photos";
                
                $search = array();
                $search['publish_status'] = 'published';

                $count = \Idno\Common\Entity::countFromX(array('IdnoPlugins\Photo\Photo'), $search);
                $feed = \Idno\Common\Entity::getFromX(array('IdnoPlugins\Photo\Photo'), $search, array(), 120);
                
                $t = \Idno\Core\Idno::site()->template();
                $t->__(array(

                    'title'       => $title,
                    'description' => $description,
                    'content'     => $friendly_types,
                    'body'        => $t->__(array(
                        'items'        => $feed,
                        'count'        => $count,
                    ))->draw('pages/photoindex'),

                ))->drawPage();
            }

        }

    }
