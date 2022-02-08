<?php

namespace GitBalocco\PhpMetricsSample\PackageOne;

class Sample
{
    private bool $flag;

    public function __construct(bool $flag)
    {
        $this->flag = $flag;
    }

    /**
     * @return bool
     */
    public function isFlag(): bool
    {
        return $this->flag;
    }

    /**
     * @param bool $flag
     */
    public function setFlag(bool $flag): void
    {
        $this->flag = $flag;
    }

    public function retrieveNames(array $array): array
    {
        $names = [];
        foreach ($array as $item) {
            if ($this->isFlag()) {
                $name = $item['name'] . $item['id'];
            } else {
                $name = $item['name'];
            }
            $names[] = $name;
        }
        return $names;
    }

    public function retrieveAges(array $array): array
    {
        $ages = [];
        foreach ($array as $item) {
            $ages[] = $item['age'];
        }
        return $ages;
    }

    public function numberOfChild(array $array): int
    {
        $count = 0;
        foreach ($array as $item) {
            if ($item['age'] < 20) {
                $count++;
            }
        }
        return $count;
    }

}