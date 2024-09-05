<?php
/**
 * ExportFormat
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
 * ExportFormat Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExportFormat
{
    /**
     * Possible values of this enum
     */
    public const PDF = 'Pdf';

    public const HTML = 'Html';

    public const MHT = 'Mht';

    public const IMAGE = 'Image';

    public const BIFF8 = 'Biff8';

    public const CSV = 'Csv';

    public const DBF = 'Dbf';

    public const JSON = 'Json';

    public const LA_TE_X = 'LaTeX';

    public const ODT = 'Odt';

    public const ODS = 'Ods';

    public const DOCX = 'Docx';

    public const PPTX = 'Pptx';

    public const XLSX = 'Xlsx';

    public const XPS = 'Xps';

    public const PPML = 'Ppml';

    public const PS = 'PS';

    public const RICHTEXT = 'Richtext';

    public const SVG = 'Svg';

    public const TEXT = 'Text';

    public const XAML = 'Xaml';

    public const XML = 'Xml';

    public const ZPL = 'Zpl';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDF,
            self::HTML,
            self::MHT,
            self::IMAGE,
            self::BIFF8,
            self::CSV,
            self::DBF,
            self::JSON,
            self::LA_TE_X,
            self::ODT,
            self::ODS,
            self::DOCX,
            self::PPTX,
            self::XLSX,
            self::XPS,
            self::PPML,
            self::PS,
            self::RICHTEXT,
            self::SVG,
            self::TEXT,
            self::XAML,
            self::XML,
            self::ZPL
        ];
    }
}


