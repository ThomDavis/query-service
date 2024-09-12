<?php

namespace ThomDavis\QueryService;

abstract class BaseQueryService
{

    protected BaseFilter $filter;
    public $query;
    public string $file_name = 'export';

    public function query()
    {
        return $this->query;
    }

    public function setFilter(BaseFilter $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    abstract public function getData(): self;
}