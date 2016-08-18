<?php

namespace AsunaY;

class XorShift {

    protected $x;
    protected $y;
    protected $z;
    protected $w;

    public function __construct($seed = null)
    {
        $this->x = 123456789;
        $this->y = 987654321;
        $this->z = 754312235;

        if ($seed) {
            $this->w = $seed;
        } else {
            $this->w = 88675123;
        }
    }

    public function getRand($min = 0, $max = 0x7fffffff)
    {
        $t = ($this->x ^ ($this->x << 11)) & 0x7fffffff;

        $this->x = $this->y;
		$this->y = $this->z;
		$this->z = $this->w;

        $this->w = ( $this->w ^ ($this->w >> 19) ^ ( $t ^ ( $t >> 8 )) );
		
		return $this->w % ($max - $min + 1) + $min;
    }
}