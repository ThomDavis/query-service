# filter-query-service-pattern
Example of the filter query service pattern and logic that goes with it.





### Example
```php
    public function index(Agency $agency_id, UsersFilter $filter, UserQueryService $service)
    {
        $filter
            ->setMovieIds(request()->input('movie_id_array')
            ->setAgencyIds([$agency_id]);

        return UserResource::collection($service->getUsers($filter)
            ->get());
    }
```
