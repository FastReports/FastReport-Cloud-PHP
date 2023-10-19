<?php
/**
 * SubscriptionGet
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FastReport Cloud
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\cloud\fastreport\model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SubscriptionGet Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubscriptionGet
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_0 = 0;

    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    public const NUMBER_4 = 4;

    public const NUMBER_8 = 8;

    public const NUMBER_16 = 16;

    public const NUMBER_32 = 32;

    public const NUMBER_64 = 64;

    public const NUMBER_128 = 128;

    public const NUMBER_256 = 256;

    public const NUMBER_512 = 512;

    public const NUMBER_1024 = 1024;

    public const NUMBER_MINUS_1 = -1;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_0,
            self::NUMBER_1,
            self::NUMBER_2,
            self::NUMBER_4,
            self::NUMBER_8,
            self::NUMBER_16,
            self::NUMBER_32,
            self::NUMBER_64,
            self::NUMBER_128,
            self::NUMBER_256,
            self::NUMBER_512,
            self::NUMBER_1024,
            self::NUMBER_MINUS_1
        ];
    }
}


