<?php

namespace GitBalocco\PhpMetricsSample\LcomExample\Best;

interface DataStructureInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getAge(): int;

    public function isChild(): bool;
}