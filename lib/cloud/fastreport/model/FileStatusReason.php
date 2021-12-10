<?php
/**
 * FileStatusReason
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\cloud\fastreport\model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FileStatusReason Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FileStatusReason
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const ALL_RIGHT = 'AllRight';
    const HANG = 'Hang';
    const ERROR = 'Error';
    const NOT_FOUND = 'NotFound';
    const NOT_ENOUGH_SPACE = 'NotEnoughSpace';
    const EXPORT_STARTED = 'ExportStarted';
    const PREPARATION_STARTED = 'PreparationStarted';
    const CRASH_LOOP = 'CrashLoop';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::ALL_RIGHT,
            self::HANG,
            self::ERROR,
            self::NOT_FOUND,
            self::NOT_ENOUGH_SPACE,
            self::EXPORT_STARTED,
            self::PREPARATION_STARTED,
            self::CRASH_LOOP,
        ];
    }
}


