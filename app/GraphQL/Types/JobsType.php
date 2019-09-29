<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Jobs\Job;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class JobsType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Jobs',
        'description' => 'A type',
        'model' => Job::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => '工作id'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => '工作名'
            ]
        ];
    }
}
