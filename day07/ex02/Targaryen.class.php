<?php
class Targaryen {

	public function resistsFire() {
		return False;
	}

	public function getBurned() {
		if (true == $this->resistsFire()) {
			return 'emerges naked but unharmed';
		}
		else {
			return 'burns alive';
		}
	}
}
?>
