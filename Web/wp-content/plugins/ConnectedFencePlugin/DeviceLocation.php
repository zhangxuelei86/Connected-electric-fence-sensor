<?php
class DeviceLocation {
	
	public $Device;
	
	public $Lat;
	
	public $Long;
	
	public $LastValue;
	
	public function __construct($d, $la, $lo, $lv){
		$this->Device = $d;
		$this->Lat = $la;
		$this->Long = $lo;
		$this->LastValue = $lv;
	}
	
	
	
}




?>