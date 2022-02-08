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

namespace GitBalocco\PhpMetricsSample\LcomExample;

use GitBalocco\PhpMetricsSample\LcomExample\MoreBetter\DataStructureCollection;

class MoreBetterSample
{
    private bool $flag;
    private DataStructureCollection $dataStructureCollection;

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
     * @return DataStructureCollection
     */
    public function getDataStructureCollection(): DataStructureCollection
    {
        return $this->dataStructureCollection;
    }

    /**
     * @param DataStructureCollection $dataStructureCollection
     */
    public function setDataStructureCollection(DataStructureCollection $dataStructureCollection): void
    {
        $this->dataStructureCollection = $dataStructureCollection;
    }


    /**
     * @param bool $flag
     */
    public function setFlag(bool $flag): void
    {
        $this->flag = $flag;
    }

    public function retrieveNames(): array
    {
        $names = [];
        foreach ($this->getDataStructureCollection()->get() as $dataStructure) {
            if ($this->isFlag()) {
                $name = $dataStructure->getName() . $dataStructure->getId();
            } else {
                $name = $dataStructure->getName();
            }
            $names[] = $name;
        }
        return $names;
    }

    public function retrieveAges(): array
    {
        $ages = [];
        foreach ($this->getDataStructureCollection()->get() as $dataStructure) {
            $ages[] = $dataStructure->getAge();
        }
        return $ages;
    }

    public function numberOfChild(): int
    {
        $count = 0;
        foreach ($this->getDataStructureCollection()->get() as $dataStructure) {
            if ($dataStructure->getAge() < 20) {
                $count++;
            }
        }
        return $count;
    }
}