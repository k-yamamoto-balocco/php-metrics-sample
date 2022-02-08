<?php

namespace GitBalocco\PhpMetricsSample\PackageTwo;

class SampleOne
{
    private $varA;
    private $varB;
    private $varC;

    private function func1(string $arg)
    {
        return '111111' . $arg;
    }

    private function func2()
    {
        return $this->varB - $this->varC;
    }

    private function func3($arg1)
    {
        return $arg1 + 1;
    }
}