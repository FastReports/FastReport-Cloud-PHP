<?php
/**
 * DataSourceConnectionType
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
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\cloud\fastreport\model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DataSourceConnectionType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DataSourceConnectionType
{
    /**
     * Possible values of this enum
     */
    public const JSON = 'JSON';

    public const MSSQL = 'MSSQL';

    public const CSV = 'CSV';

    public const XML = 'XML';

    public const MY_SQL = 'MySQL';

    public const POSTGRES = 'Postgres';

    public const ORACLE_DB = 'OracleDB';

    public const FIREBIRD_DB = 'FirebirdDB';

    public const MONGO_DB = 'MongoDB';

    public const CLICK_HOUSE = 'ClickHouse';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JSON,
            self::MSSQL,
            self::CSV,
            self::XML,
            self::MY_SQL,
            self::POSTGRES,
            self::ORACLE_DB,
            self::FIREBIRD_DB,
            self::MONGO_DB,
            self::CLICK_HOUSE
        ];
    }
}


