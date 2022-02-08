<?php

/**
 * Balocco Inc.
 * ～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～
 * 株式会社バロッコはシステム設計・開発会社として、
 * 社員・顧客企業・パートナー企業と共に企業価値向上に全力を尽くします
 *
 * 1. プロフェッショナル集団として人間力・経験・知識を培う
 * 2. システム設計・開発を通じて、顧客企業の成長を活性化する
 * 3. 顧客企業・パートナー企業・弊社全てが社会的意義のある事業を営み、全てがwin-winとなるビジネスをする
 * ～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～～
 * 本社所在地
 * 〒101-0032　東京都千代田区岩本町2-9-9 TSビル4F
 * TEL:03-6240-9877
 *
 * 大阪営業所
 * 〒530-0063　大阪府大阪市北区太融寺町2-17 太融寺ビル9F 902
 *
 * https://www.balocco.info/
 * © Balocco Inc. All Rights Reserved.
 */

namespace GitBalocco\PhpMetricsSample\LcomExample\Best;

/**
 * DataStructureCollection
 * 結局、コレクションがメソッドをもっているべきでしょ、という話になるわけですね。
 *
 * @package GitBalocco\PhpMetricsSample\LcomExample
 */
class DataStructureCollection
{
    private array $array = [];

    /**
     * @return DataStructureInterface[]
     */
    public function get(): array
    {
        return $this->array;
    }

    /**
     * @param array $array
     */
    public function set(array $array): void
    {
        foreach ($array as $candidate) {
            if (!is_a($candidate, DataStructureInterface::class)) {
                throw new \InvalidArgumentException();
            }
        }
        $this->array = $array;
    }

    public function retrieveNames(bool $flag): iterable
    {
        $result = [];
        foreach ($this->get() as $dataStructure) {
            if ($flag) {
                $name = $dataStructure->getName() . $dataStructure->getId();
            } else {
                $name = $dataStructure->getName();
            }
            $result[] = $name;
        }
        return $result;
    }

    public function retrieveAges(): array
    {
        $result = [];
        foreach ($this->get() as $dataStructure) {
            $result[] = $dataStructure->getAge();
        }
        return $result;
    }

    public function numberOfChild(): int
    {
        $count = 0;
        foreach ($this->get() as $dataStructure) {
            if ($dataStructure->isChild()) {
                $count++;
            }
        }
        return $count;
    }
}