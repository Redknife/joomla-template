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
    
    function modChrome_default($module, &$params, &$attribs)
    {
            if ($module->content) {
                    echo "<div class=\"module ". htmlspecialchars($params->get('moduleclass_sfx')) ."\">";
                    if ($module->showtitle)
                        echo "<h3 class=\"module-header\"><strong>".$module->title."</strong></h3>";
                    echo $module->content;
                    echo "</div>";
            }
    }
?>
