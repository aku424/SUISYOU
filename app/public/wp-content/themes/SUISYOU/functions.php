<?php
function my_script_init() {
    wp_enqueue_style("common-style", get_template_directory_uri() . "/common/styles/index.css", array(), filemtime(get_theme_file_path('/common/styles/index.css')), "all");
    wp_enqueue_script("common-script", get_template_directory_uri() . "/common/scripts/index.js", array("jquery"), filemtime(get_theme_file_path('/common/scripts/index.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");
