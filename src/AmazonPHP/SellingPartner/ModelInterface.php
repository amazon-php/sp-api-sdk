<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

interface ModelInterface
{
    /**
     * @return mixed[]
     */
    public static function openAPITypes() : array;

    /**
     * @return mixed[]
     */
    public static function openAPIFormats() : array;

    /**
     * @return mixed[]
     */
    public static function attributeMap() : array;

    /**
     * @return mixed[]
     */
    public static function setters() : array;

    /**
     * @return mixed[]
     */
    public static function getters() : array;

    public function getModelName() : string;

    /**
     * @return mixed[]
     */
    public function listInvalidProperties() : array;

    public function valid() : bool;
}
