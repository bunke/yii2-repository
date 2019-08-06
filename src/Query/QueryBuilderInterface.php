<?php

namespace Indigerd\Repository\Query;

interface QueryBuilderInterface
{
    public function queryOne(array $conditions): ?array;

    public function insert(array $data): ?array;

    public function updateOne(array $data): void;

    public function deleteOne(array $data): void;

    public function updateAll(array $data, array $conditions): int;

    public function deleteAll(array $conditions): int;

    public function queryAll(array $conditions, array $order = [], int $limit = 0, int $offset = 0): array;

    public function aggregate(string $expression, array $conditions): string;

    public function aggregateCount(string $field = '', array $conditions = []): string ;

    public function aggregateSum(string $field, array $conditions = []): string ;

    public function aggregateAverage(string $field, array $conditions = []): string ;

    public function aggregateMin(string $field, array $conditions = []): string ;

    public function aggregateMax(string $field, array $conditions = []): string ;
}