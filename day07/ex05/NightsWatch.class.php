<?php
class NightsWatch {
	private $members = array();
	public function recruit($blerp) {
		$this->members[] = $blerp;
	}
	public function fight() {
		foreach($this->members as $blerp) {
			if ($blerp instanceof IFighter)
				$blerp->fight();
		}
	}
}
?>
