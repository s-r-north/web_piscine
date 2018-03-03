<?php
class Lannister {
	public function sleepWith($object) {
		if ($object instanceof Lannister) {
			print 'Not even if I\'m drunk !';
		}
		else {
			print 'Let\'s do this.';
		}
		print PHP_EOL;
	}
}
?>
