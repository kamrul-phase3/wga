<?php 
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;

class SidebarMenu {
	public $user = null;
	public $result = null;
	function __construct($user=null) {
		if ( !$user ) redirect('login');
		$this->user = $user;
	}
	function get() {
		return $this->result;
	}
	public function items() {
		$this->activeBia();
		return $this->result;
	}
	function activeBia() {
		if ( $this->user->company_id ) {
			$this->result = \App\Bia::where('company_id', '=', $this->user->company_id)
			->with('departments')
			->with('departments.companybiadepartment')
			->first();
		}
		return $this;
	}
	public function HTML() {
		$str = null;
		if ( !empty($this->result) ) {
			$str .= $this->mainMenuItem();
			$str .= $this->subMenuItems();
			$this->result = $str;
		}
		return $this;
	}
	public function mainMenuItem() {
		$str = null;
		if ( !empty($this->result) ) {
			$str .= '<a href="javascript:;" class="menu-link menu-toggle">';
			    $str .= '<span class="svg-icon menu-icon">'.$this->result->logo().'</span>';
			    $str .= '<span class="menu-text">'.$this->result->name.'</span>';
			    $str .= '<i class="menu-arrow"></i>';
			$str .= '</a>';
		}
		return $str;
	}
	public function subMenuItems() {
		$str = null;
		if ( !empty($this->result->departments) ) {
			$str .= '<div class="menu-submenu">';
			    $str .= '<i class="menu-arrow"></i>';
			    $str .= '<ul class="menu-subnav">';
					foreach ($this->result->departments as $department) {
						$param = [
							'bia'=>$this->result->id,
							'department'=>$department->id,
							'section'=>1
						];
				        $str .= '<li class="menu-item" aria-haspopup="true">';
				            // $str .= '<a href="'.url('/bia/1/department/2/section/1').'" class="menu-link">';
				            $str .= '<a href="'.route('bia.assessment', $param).'" class="menu-link">';
				                $str .= '<i class="menu-bullet menu-bullet-dot">';
				                    $str .= '<span></span>';
				                $str .= '</i>';
				                $str .= '<span class="menu-text">'.$department->companybiadepartment->name.'</span>';
				            $str .= '</a>';
				        $str .= '</li>';
					}
			    $str .= '</ul>';
			$str .= '</div>';
		}
		return $str;
	}
}