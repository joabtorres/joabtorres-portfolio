<?php
if(strpos(url(), ".loc")){
    /**
     * CSS
     */
    $minCSS = new \MatthiasMullie\Minify\CSS();
    $minCSS->add(__DIR__."/../../shared/fontawesome/css/fontawesome.min.css");
    $minCSS->add(__DIR__."/../../shared/fontawesome/css/regular.min.css");
    $minCSS->add(__DIR__."/../../shared/fontawesome/css/solid.min.css");
    $minCSS->add(__DIR__."/../../shared/fontawesome/css/brands.min.css");

    //theme css
    $cssDir = scandir(__DIR__."/../../themes/".CONF_VIEW_THEME."/assets/css");
    foreach ($cssDir as $css){
        $cssFile = __DIR__."/../../themes/".CONF_VIEW_THEME."/assets/css/{$css}";
        if(is_file($cssFile) && pathinfo($cssFile)['extension'] == "css"){
            $minCSS->add($cssFile);
        }
    }

    //Minify CSS
    $minCSS->minify(__DIR__."/../../themes/".CONF_VIEW_THEME."/assets/styles_minify.css");

    /**
     * JS
     */
    $minJS= new \MatthiasMullie\Minify\JS();
    $minJS->add(__DIR__."/../../shared/scripts/jquery-3.7.0.min.js");
    $minJS->add(__DIR__."/../../shared/scripts/jquery.form.min.js");
    $minJS->add(__DIR__."/../../shared/scripts/typed.min.js");

    //themes js
    $jsDir = scandir(__DIR__."/../../themes/".CONF_VIEW_THEME."/assets/js");
    foreach ($jsDir as $js) {
        $jsFile = __DIR__."/../../themes/".CONF_VIEW_THEME."/assets/js/{$js}";
        if(is_file($jsFile) && pathinfo($jsFile)['extension'] == "js"){
            $minJS->add($jsFile);
        }
    }

    //Minify JS
    $minJS->minify(__DIR__."/../../themes/".CONF_VIEW_THEME."/assets/scripts_minify.js");
}