<?php
// functions/ui_helpers.php

if (!function_exists('icon')) {
    function icon($id, $class = '') {
        return sprintf(
            '<svg class="icon %s" aria-hidden="true"><use xlink:href="#%s"></use></svg>',
            htmlspecialchars($class),
            htmlspecialchars($id)
        );
    }
}

// if (!function_exists('icon')) {
//     /**
//      * 渲染 SVG Icon
//      * @param string $id    Symbol 的 ID
//      * @param string $class CSS 類別
//      * @param string $ratio 對齊比例 (預設為空，若有特殊對齊需求如 xMinYMid 可傳入)
//      */
//     function icon($id, $class = '', $ratio = '') {
//         $attr_ratio = $ratio ? sprintf(' preserveAspectRatio="%s"', htmlspecialchars($ratio)) : '';
        
//         return sprintf(
//             '<svg class="icon %s" aria-hidden="true"%s><use xlink:href="#%s"></use></svg>',
//             htmlspecialchars($class),
//             $attr_ratio,
//             htmlspecialchars($id)
//         );
//     }
// }
?>