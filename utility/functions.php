<?php
    function includeWithVariables($fileName, $variables) {
        if (is_array($variables)) {
            extract($variables);
        }
        include($fileName);
    }
?>