<?php

namespace AmazonPHP\SellingPartner\Model;

interface ModelInterface
{
    public function getModelName() : string;

    public static function openAPITypes() : array;

    public static function openAPIFormats() : array;

    public static function attributeMap() : array;

    public static function setters() : array;

    public static function getters() : array;

    public function listInvalidProperties() : array;

    public function valid() : bool;
}