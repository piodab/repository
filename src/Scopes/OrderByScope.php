<?php

namespace AwesIO\Repository\Scopes;

class OrderByScope extends ScopeAbstract
{
    public function mappings()
    {
        return [
            'id' => 'asc',
        ];
    }

    public function scope($builder, $value, $scope)
    {
        $field = $value;

        $value = $this->resolveScopeValue($value);

        return is_null($value) 
            ? $builder->orderBy($field, 'desc') 
            : $builder->orderBy($field, $value);
    }
}