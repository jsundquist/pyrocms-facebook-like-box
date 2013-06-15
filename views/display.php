<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box"
     data-href="<?php echo $options['url']; ?>"
     data-width="<?php echo $options['width']; ?>"
     data-height="<?php echo $options['height']; ?>"
     data-show-faces="<?php echo (array_key_exists('show_faces', $options) && $options['show_faces'] == 1) ? 'true' : 'false'; ?>"
     data-colorscheme="<?php echo $options['color_scheme']; ?>"
     data-stream="<?php echo (array_key_exists('stream', $options) && $options['stream'] == 1) ? 'true' : 'false'; ?>"
     data-show-border="<?php echo (array_key_exists('show_border', $options) && $options['show_border'] == 1) ? 'true' : 'false'; ?>"
     data-header="<?php echo (array_key_exists('header', $options) && $options['header'] == 1) ? 'true' : 'false'; ?>">
 </div>