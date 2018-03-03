<?php
class Fighter {
	private $name;
	public function __construct($str) {
		$this->name = $str;
	}
	public function getName() {
		return $this->name;
	}
}
?>
