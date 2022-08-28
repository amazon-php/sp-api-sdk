<?php

declare(strict_types=1);

namespace AmazonPHP\Rector\ValueObject;

use PHPStan\Type\ObjectType;

final class NullableReturnTypeDeclaration
{
    private string $class;

    private string $method;

    public function __construct(string $class, string $method)
    {
        $this->class = $class;
        $this->method = $method;
    }

    public function getClass() : string
    {
        return $this->class;
    }

    public function getMethod() : string
    {
        return $this->method;
    }

    public function getObjectType() : ObjectType
    {
        return new ObjectType($this->class);
    }
}
