<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Query\QueryParameter;
use ApiPlatform\Laravel\Eloquent\Filter\EqualsFilter;
use Illuminate\Database\Eloquent\Model;

#[ApiResource]
#[QueryParameter(key: 'name', filter: EqualsFilter::class)]
class Book extends Model
{
    //
}
