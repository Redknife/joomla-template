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
?>