<?php
class UnholyFactory {
	public $warriors = array();
	public function absorb($type) {
		if ($type instanceof Fighter) {
			foreach ($this->warriors as $name => $obj) {
				if ($type->getName() == $name) {
					print "(Factory already absorbed a fighter of type ".$name.")".PHP_EOL;
					return ;
				}
			}
			print "(Factory absorbs a fighter of type ".$type->getName().")".PHP_EOL;
			$this->warriors[$type->getName()] = $type;
			return ;
		}
		print "(Factory can't absorb this, it's not a fighter)".PHP_EOL;
	}
	public function fabricate($str) {
		foreach ($this->warriors as $name => $type) {
			if ($str == $name) {
				print "(Factory fabricates a fighter of type ".$str.")".PHP_EOL;
				return new $type;
			}
		}
		print "(Factory hasn't absorbed any fighter of type ".$str.")".PHP_EOL;
	}
}
?>
