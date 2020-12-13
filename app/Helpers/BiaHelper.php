<?php 
namespace App\Helpers;

class BiaHelper {
	private $biaId = null;
	private $departmentId = null;
	private $sectionId = null;

	function __construct($args=null) {
		if ( !empty($args['bia_id']) ) 			$biaId 			= $args['bia_id'];
		if ( !empty($args['department_id']) ) 	$departmentId 	= $args['department_id'];
		if ( !empty($args['section_id']) ) 		$sectionId 		= $args['section_id'];
	}
	public function questions($services) {
		if ($services->isEmpty()) return null;
		else {
			$arr = [];
			foreach ($services as $service) {
				$arr[$service->id] = $service->name;
			}
			return $arr;
		}
	}
	public function colorByValue($val) {
		$cl = null;
		switch ($val) {
			case '1': 	$cl = 'bg-lightgreen'; break;
			case '2':
			case '4': 	$cl = 'bg-darkyellow'; break;
			case '5':
			case '8': 	$cl = 'bg-darkorange'; break;
			case '7':
			case '16': 	$cl = 'bg-darkred'; break;
			default: 	$cl = 'bg-skyblue'; break;
		}
		return $cl;
	}
	public function colorByValueForWeight($val) {
		$cl = null;
		switch ($val) {
			case '1': 	$cl = 'bg-lightgreen'; break;
			case '2': 	$cl = 'bg-darkyellow'; break;
			case '3': 	$cl = 'bg-darkred'; break;
			default: 	$cl = 'bg-lightgreen'; break;
		}
		return $cl;
	}
	public function serviceCalculation($val) {
		$data = (object) [];	
		if ($val >= 0 && $val <= 20) {
			$data->level = 'Non-essential';
			$data->rto = '2 - 4 Weeks';
			$data->bg = 'bg-lightgreen';
		} else if ($val >= 21 && $val <= 40) {
			$data->level = 'Normal';
			$data->rto = '7 Days';
			$data->bg = 'bg-skyblue';
		} else if ($val >= 41 && $val <= 60) {
			$data->level = 'Important';
			$data->rto = '3 Days';
			$data->bg = 'color-three';
		} else if ($val >= 61 && $val <= 80) {
			$data->level = 'Urgent';
			$data->rto = '24 Hours';
			$data->bg = 'bg-darkorange';
		} else if ($val >= 80) {
			$data->level = 'Critical';
			$data->rto = '0 - 4 Hours';
			$data->bg = 'bg-darkred';
		} else {
			$data->level = null;
			$data->rto = null;
			$data->bg = null;
		}
		return $data;
	}
	public function advisory_checkbox_array($strOptions, $defaults=null, $input=true, $q4b=false){
		$html = '';
		// return 'BiaHelper -- advisory_checkbox_array -- Method';
		$disables = [];
		$defaults = explode(',', $defaults);
		// $options = explode(PHP_EOL, $strOptions);
		$options = $this->jsonDBFieldToArray($strOptions);
		// if ($q4b) {
		// 	$disables = explode(',', $q4b);
		// 	if ($defaults) $disables = array_diff($disables, $defaults);
		// }
		if ( !empty($options) ) {
			list($part1, $part2) = array_chunk($options, ceil(count($options) / 2), true);
			// return [$part1, $part2];
			if (!empty($part1)) {
				$html .= '<div class="firstHalf" style="width:50%;float:left;">';
					$html .= $this->getCheckboxHTML($part1, $defaults, $disables, $input);
				$html .= '</div>';
			}
			if (!empty($part2)) {
				$html .= '<div class="secondHalf" style="width:50%;float:left;">';
					$html .= $this->getCheckboxHTML($part2, $defaults, $disables, $input);
				$html .= '</div>';
			}
		}
		return $html;
	}
	public function jsonDBFieldToArray($field, $alphabeticOrder=false)
	{
		$items = null;
        if ( !empty($field) ) {
            $dependencies = json_decode($field);
            if ( !empty($dependencies) ) {
                foreach ($dependencies as $dependency) {
                    if ( !empty($dependency->attributes) ) {
                        $items[$dependency->attributes->id] = $dependency->attributes->title;
                    }
                }
            }
            if ( $alphabeticOrder) natcasesort($items);
        }
        return $items;
	}
	
	public function getCheckboxHTML($options, $defaults, $disables, $input) {
		$html = '';
		if (!empty($options)) {
			foreach ($options as $optionSI => $option) {
				$checked = in_array($optionSI, $defaults) ? ' checked' : '';
				$active = in_array($optionSI, $defaults) ? ' activeLabel' : '';
				$isDisabled = in_array($optionSI, $disables) ? 'disabled' : '';
		        
		        $html .= '<label class="'. $active .' '. $isDisabled .'">';
		        	if ($input) $html .= '<input type="checkbox" class="upstream" name="upstream[]" value="'. $optionSI .'"'. $checked .' '. $isDisabled .'> ';
		        	// else $html .= $optionSI .'. ';
		        	$html .= $option;
		        $html .= '</label>';
		        // $html .= '<br>';
			}
		}
		return $html;
	}
}