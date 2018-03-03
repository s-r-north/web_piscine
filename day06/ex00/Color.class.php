<?php
class Color {
	private static bool $verbose = False;

	public int $red;
	public int $green;
	public int $blue;

	public function __construct(array());
	public function __destruct();

	public Color add(Color $rhs);
	public Color sub(Color $rhs);
	public Color mult(Color $rhs);

};
?>
