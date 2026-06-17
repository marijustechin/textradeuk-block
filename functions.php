<?php

if (!function_exists("textradeuk_enqueue_styles")):
    /**
     * Enqueues the theme stylesheet on the front.
     *
     * @return void
     */
    function textradeuk_enqueue_styles()
    {
        $version = wp_get_theme()->get("Version");

        // main style.css in the theme root
        wp_enqueue_style("s2r-main-style", get_stylesheet_uri(), [], $version);
    }
endif;
add_action("wp_enqueue_scripts", "textradeuk_enqueue_styles");
