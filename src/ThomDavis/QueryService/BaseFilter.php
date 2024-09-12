<?php

namespace ThomDavis\QueryService;

use Illuminate\Http\Request;

abstract class BaseFilter
{
    public string $type = 'json';
    public string $sort = 'created_at';
    public string $sort_direction = 'desc';
    public string $items = '25';
    public array $columns = [];
    public array $filters = [];
    public array $sorts = [];

    public function setColumns(array $data): self
    {
        $this->columns = $data;

        return $this;
    }

    abstract public function setFilters(Request $request): self;

    public function setSort(string|null $sort): self
    {
        $this->sort = $sort;

        return $this;
    }


    public function setDirection(string|null $sort_direction): self
    {
        $this->sort_direction = $sort_direction;

        return $this;
    }

    public function setType(string|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setItems(string|null $items): self
    {
        $this->items = $items;

        return $this;
    }
}