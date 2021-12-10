<?php

namespace App\GraphQL\Queries;

class SomeComplexQuery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        return \App\Models\Book::where('author','like','%'.$args['search'].'%')->get();
    }
}
