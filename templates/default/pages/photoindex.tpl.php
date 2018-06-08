<style type="text/css">
    div.photos-overview h1 {
        font-size: 2.5em !important;
        margin: 1em 0 0.75em 30px;
    }

    div.photos-overview {
        background: white;
        padding: 1em 0em;
        margin: 0;
        overflow: hidden;
    }
    
    div.photos-container {
        margin-left: 0.5em;
    }    

    div.photo {
        float: left;
        width: 275px;
        height: 275px;
        margin: 0 0 30px 30px;
    }

    div.photo:hover {
        cursor: pointer;
        opacity: 0.75;
    }

    @media (min-width: 992px) {
        div.photos-overview {
            margin-left: 1em;
        }
        div.photo {
            width: 330px;
            height: 330px;
        }
    }
</style>

<div class="photos-overview">
    <div class="photos-container col-md-20 col-md-offset-0">
    <h1><i class="fa fa-camera-retro"></i> Recent Photos</h1>
<?php
        foreach ($items as $photo) {
            $thumbs = [];
            if ($photo['thumbnail_large'] != null) {
                array_push($thumbs, $photo['thumbnail_large']);
            } else if ($photo['thumbs_large'] != null) {
                foreach ($photo['thumbs_large'] as $thumb) {
                    array_push($thumbs, $thumb['url']);
                }
            } else {
                continue;
            }

            foreach ($thumbs as $thumb) {
?>
                <!-- photo -->
                <a href="<?= $photo->getURL() ?>">
                    <div class="photo" style="background-image:url(<?= $thumb ?>); background-size: cover; background-position: 50%">
                </div>
                </a>
                <!-- end photo -->
<?php
            }
    }
?>
    </div>
</div>
