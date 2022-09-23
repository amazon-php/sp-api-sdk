<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit\Model\CatalogItem;

use AmazonPHP\SellingPartner\Model\CatalogItem\Item;
use PHPUnit\Framework\TestCase;

final class ItemTest extends TestCase
{
    public function test_set_attributes_param_type() : void
    {
        $reflection = new \ReflectionClass(Item::class);

        $this->assertSame(
            "array",
            $reflection->getMethod("setAttributes")->getParameters()[0]->getType()->getName()
        );
    }
}