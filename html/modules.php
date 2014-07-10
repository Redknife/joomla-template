<?php
    function modChrome_mainmenu($module, $params, $attribs)
    {

        $wrapperClass = htmlspecialchars($params->get('moduleclass_sfx'));

        $html = '';

        if (!empty ($module->content)) {

            $html .= '<div class="navbar '.$wrapperClass.'">';
            $html .= '<div class="navbar-inner">';
            $html .= '<div class="container">';

            $html .= $module->content;

            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';

        }

        echo $html;
    }

    function modChrome_slider($module, $params, $attribs)
    {

        $wrapperClass = htmlspecialchars($params->get('myslider'));

        $html = '';

        if (!empty ($module->content)) {

            $html .= '<div class="mod-slider-wrapper '.$wrapperClass.'">';
            $html .= '<div class="viewport">';
            $html .= '<ul class="overview unstyled">';

            $html .= $module->content;

            $html .= '</ul>';
            $html .= '</div>';
            $html .= '</div>';

        }

        echo $html;
    }
?>