<?php
/**
 * SaveMode
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
 * SaveMode Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SaveMode
{
    /**
     * Possible values of this enum
     */
    public const ALL = 'All';

    public const ORIGINAL = 'Original';

    public const USER = 'User';

    public const ROLE = 'Role';

    public const SECURITY = 'Security';

    public const DENY = 'Deny';

    public const CUSTOM = 'Custom';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::ORIGINAL,
            self::USER,
            self::ROLE,
            self::SECURITY,
            self::DENY,
            self::CUSTOM
        ];
    }
}


