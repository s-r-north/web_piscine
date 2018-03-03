<?php
class Jaime extends Lannister {
	public function sleepWith($object) {
		if ($object instanceof Cersei) {
			print 'With pleasure, but only in a tower in Winterfell, then.';
		}
		else if ($object instanceof Lannister) {
			print 'Not even if I\'m drunk !';
		}
		else {
			print 'Let\'s do this.';
		}
		print PHP_EOL;
	}
}
?>
