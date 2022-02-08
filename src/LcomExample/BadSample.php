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

/**
 * LCOM指標によって改善点に気がつく具体例
 *
 * このクラスは、メソッドの引数で受け取った配列を加工して返却するメソッドを3つ持っている。
 * 機能 と データ がまとまっていないことが、LCOMの数値を見るとわかる。
 * LCOM = 3
 *
 */
class BadSample
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