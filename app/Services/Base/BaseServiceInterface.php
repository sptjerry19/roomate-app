<?php

namespace App\Services\Base;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

interface BaseServiceInterface
{
    /**
     * @param string|null $keyword
     * @param array|null $columnsSearch
     * @param array|null $filters
     * @param int|null $page
     * @param int|null $limit
     * @return mixed
     */
    public function searchAndFilter(?string $keyword, ?array $columnsSearch, ?array $filters, ?int $page, ?int $limit): mixed;

    /**
     * @param string $select
     *
     * @return Builder | boolean
     */
    public function select(string $select = '*');

    /**
     *
     * @return Collection | boolean
     */
    public function getAll();

    /**
     *
     * @param int $id
     *
     * @return mixed
     */
    public function find(int $id);

    /**
     * @return mixed
     */
    public function first();

    /**
     *
     * @param $condition
     *
     * @return mixed
     */
    public function findByCondition($condition);

    /**
     *
     * @param int $id
     *
     * @return mixed
     */
    public function findOrFail(int $id);

    /**
     *
     * @param array $attributes
     *
     * @return mixed
     */
    public function create(array $attributes);

    /**
     *
     * @param array $attributes
     *
     * @return int
     */
    public function insertGetId(array $attributes): int;

    /**
     *
     * @param array $attributes
     *
     * @return bool
     */
    public function insert(array $attributes): bool;

    /**
     *
     * @param int $id
     * @param array $attributes
     *
     * @return mixed
     */
    public function update(int $id, array $attributes);

    /**
     *
     * @param array $ids
     * @param array $attributes
     *
     * @return int
     */
    public function updateInIds(array $ids, array $attributes): int;

    /**
     *
     * @param array $ids
     *
     * @return int
     */
    public function deleteInIds(array $ids): int;

    /**
     *
     * @param array $maps
     * @param array $attributes
     *
     * @return mixed
     */
    public function updateOrCreate(array $maps, array $attributes);

    /**
     *
     * @param array $maps
     * @param array $attributes
     *
     * @return mixed
     */
    public function firstOrCreate(array $maps, array $attributes = []);

    /**
     *
     * @param int $id
     *
     * @return bool
     */
    public function delete(int $id): bool;

    /**
     *
     * @param int|null $limit
     * @param array $columns
     * @param string $method
     *
     * @return mixed
     */
    public function paginate(int $limit = null, array $columns = ['*'], string $method = "paginate");

    /**
     *
     * @param int|null $limit
     * @param array $columns
     *
     * @return mixed
     */
    public function simplePaginate(int $limit = null, array $columns = ['*']);

    /**
     * @param string|null $keywordSearch
     * @param array|null $columnsSearch
     * @return mixed
     */
    public function searchByColumn(?string $keywordSearch, ?array $columnsSearch): mixed;
}
