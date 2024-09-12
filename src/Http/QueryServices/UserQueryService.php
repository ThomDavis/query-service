<?php

namespace App\Http\QueryServices\RibbonLink;

use App\Http\QueryServices\BaseQueryService;
class UserQueryService extends BaseQueryService
{
    public function __construct()
    {
        $this->query = User::query();
    }

    public function getData(): BaseQueryService
    {
        return $this;
    }
}