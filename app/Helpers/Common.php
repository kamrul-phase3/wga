<?php 

if (! function_exists('select')) {
	function select($name = '', $id = null, $class = null, $attr = null, $options, $default = null): string {
		if ( !empty($options) ) {
			$html = '<select name="' . $name . '" ';
			if ( $id ) $html .= 'id="' . $id . '" ';
			if ( $class ) $html .= 'class="' . $class . '"';
			if ( $attr ) $html .= ' '.$attr .' ';
			$html .= '>';
			foreach ($options as $value => $title) {
				$html .= '<option value="'. $value .'" '. ($default == $value ? 'selected' : '') .'>'. $title .'</option>';
			}
			$html .= '</select>';
			return $html;
		}
		return '';
	}
}
if (! function_exists('idFromString')) {
	function idFromString($string): string{
		$string = str_replace(['#', '[', '(', ')', '-', '+', '/', ']', ' ', '?', ';'], '_', strtolower(trim($string)));
		$string = str_replace(['&'], 'sand', $string);
		$string = str_replace(',', 'comaoperator', $string);
		$string = str_replace('.', 'dotoperator', $string);
		return $string;
	}
}
if (! function_exists('stringFromId')) {
	function stringFromId($string): string{
		$string = ucwords(str_replace('_', ' ', trim($string)));
		$string = str_replace('sand', '&', $string);
		$string = str_replace('comaoperator', ',', $string);
		$string = str_replace('dotoperator', '.', $string);
		return $string;
	}
}
if (! function_exists('advisory_test')) {
	function advisory_test() {
		return 'Test';
	}
}