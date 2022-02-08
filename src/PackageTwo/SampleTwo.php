<?php

namespace GitBalocco\PhpMetricsSample\PackageTwo;

class SampleTwo
{
    private $a1;
    private $a2;
    private $a3;
    private $a4;

    public function m1()
    {
        $this->a1 = 0;
        $this->a2 = 1;
    }

    public function m2()
    {
        $this->a1 = 1;
        $this->a2 = 2;
    }

    public function m3()
    {
        $this->a3 = 0;
        $this->a4 = 3;
    }

    public function m4()
    {
        $this->a3 = 1;
        $this->a4 = 2;
    }
}