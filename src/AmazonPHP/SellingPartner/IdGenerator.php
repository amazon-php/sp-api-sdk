<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

interface IdGenerator
{
    public function generate() : string;
}
