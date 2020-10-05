<?php

/**
 *
 * @param string    $iconName Name or class of the icon
 *
 */

function icon($iconName, $hashversion = '00000') {
	if (strpos($iconName, 'general') !== false) {
	    $area = 'general';
	}
	if (strpos($iconName, 'locals') !== false) {
	    $area = 'locals';
	}
	if (strpos($iconName, 'fae') !== false) {
	    $area = 'fae';
	}
	if (strpos($iconName, 'weather') !== false) {
	    $area = 'weather';
	}

	return'
		<svg class="icon '.$iconName.'">
			<use xlink:href="'.get_stylesheet_directory_uri().'/assets/images/icons/'.$area.'-symbol-defs.svg?v='.$hashversion.'#'.$iconName.'"></use>
		</svg>
	';
}


?>
