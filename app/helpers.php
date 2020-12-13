<?php 

if (! function_exists('advisory_opt_select')) {
	function advisory_opt_select($name = '', $id = null, $class = null, $attr = null, $opts, $default = null): string {
		if ( !empty($opts) ) {
			$html = '<select name="' . $name . '" ';
			if ( $id ) $html .= 'id="' . $id . '" ';
			if ( $class ) $html .= 'class="' . $class . '"';
			if ( $attr ) $html .= ' '.$attr .' ';
			$html .= '>';
			foreach ($opts as $val => $title) {
				$html .= '<option value="'. $val .'" '. ($default == $val ? 'selected' : '') .'>'. $title .'</option>';
			}
			$html .= '</select>';
			return $html;
		}
		return '';
	}
}
if (! function_exists('advisory_test')) {
	function advisory_test() {
		return 'Test';
	}
}