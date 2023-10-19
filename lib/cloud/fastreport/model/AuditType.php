<?php
/**
 * AuditType
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
 * AuditType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuditType
{
    /**
     * Possible values of this enum
     */
    public const TASK_CREATED_EXPORT_TEMPLATE = 'Task_Created_ExportTemplate';

    public const TASK_CREATED_EXPORT_REPORT = 'Task_Created_ExportReport';

    public const TASK_CREATED_PREPARE_TEMPLATE = 'Task_Created_PrepareTemplate';

    public const TASK_CREATED_FETCH = 'Task_Created_Fetch';

    public const TASK_CREATED_EMAIL = 'Task_Created_Email';

    public const TASK_CREATED_WEBHOOK = 'Task_Created_Webhook';

    public const TASK_DELETED_EXPORT_TEMPLATE = 'Task_Deleted_ExportTemplate';

    public const TASK_DELETED_EXPORT_REPORT = 'Task_Deleted_ExportReport';

    public const TASK_DELETED_PREPARE_TEMPLATE = 'Task_Deleted_PrepareTemplate';

    public const TASK_DELETED_FETCH = 'Task_Deleted_Fetch';

    public const TASK_DELETED_EMAIL = 'Task_Deleted_Email';

    public const TASK_DELETED_WEBHOOK = 'Task_Deleted_Webhook';

    public const TASK_UPDATED_EXPORT_TEMPLATE = 'Task_Updated_ExportTemplate';

    public const TASK_UPDATED_EXPORT_REPORT = 'Task_Updated_ExportReport';

    public const TASK_UPDATED_PREPARE_TEMPLATE = 'Task_Updated_PrepareTemplate';

    public const TASK_UPDATED_FETCH = 'Task_Updated_Fetch';

    public const TASK_UPDATED_EMAIL = 'Task_Updated_Email';

    public const TASK_UPDATED_WEBHOOK = 'Task_Updated_Webhook';

    public const TASK_IN_QUEUE_EXPORT_TEMPLATE = 'Task_InQueue_ExportTemplate';

    public const TASK_IN_QUEUE_EXPORT_REPORT = 'Task_InQueue_ExportReport';

    public const TASK_IN_QUEUE_PREPARE_TEMPLATE = 'Task_InQueue_PrepareTemplate';

    public const TASK_IN_QUEUE_FETCH = 'Task_InQueue_Fetch';

    public const TASK_IN_QUEUE_EMAIL = 'Task_InQueue_Email';

    public const TASK_IN_QUEUE_WEBHOOK = 'Task_InQueue_Webhook';

    public const TASK_IN_PROCESS_EXPORT_TEMPLATE = 'Task_InProcess_ExportTemplate';

    public const TASK_IN_PROCESS_EXPORT_REPORT = 'Task_InProcess_ExportReport';

    public const TASK_IN_PROCESS_PREPARE_TEMPLATE = 'Task_InProcess_PrepareTemplate';

    public const TASK_IN_PROCESS_FETCH = 'Task_InProcess_Fetch';

    public const TASK_IN_PROCESS_EMAIL = 'Task_InProcess_Email';

    public const TASK_IN_PROCESS_WEBHOOK = 'Task_InProcess_Webhook';

    public const TASK_SUCCESS_EXPORT_TEMPLATE = 'Task_Success_ExportTemplate';

    public const TASK_SUCCESS_EXPORT_REPORT = 'Task_Success_ExportReport';

    public const TASK_SUCCESS_PREPARE_TEMPLATE = 'Task_Success_PrepareTemplate';

    public const TASK_SUCCESS_FETCH = 'Task_Success_Fetch';

    public const TASK_SUCCESS_EMAIL = 'Task_Success_Email';

    public const TASK_SUCCESS_WEBHOOK = 'Task_Success_Webhook';

    public const TASK_FAILED_EXPORT_TEMPLATE = 'Task_Failed_ExportTemplate';

    public const TASK_FAILED_EXPORT_REPORT = 'Task_Failed_ExportReport';

    public const TASK_FAILED_PREPARE_TEMPLATE = 'Task_Failed_PrepareTemplate';

    public const TASK_FAILED_FETCH = 'Task_Failed_Fetch';

    public const TASK_FAILED_EMAIL = 'Task_Failed_Email';

    public const TASK_FAILED_WEBHOOK = 'Task_Failed_Webhook';

    public const TASK_CREATED_THUMBNAIL_REPORT = 'Task_Created_ThumbnailReport';

    public const TASK_DELETED_THUMBNAIL_REPORT = 'Task_Deleted_ThumbnailReport';

    public const TASK_UPDATED_THUMBNAIL_REPORT = 'Task_Updated_ThumbnailReport';

    public const TASK_IN_QUEUE_THUMBNAIL_REPORT = 'Task_InQueue_ThumbnailReport';

    public const TASK_IN_PROCESS_THUMBNAIL_REPORT = 'Task_InProcess_ThumbnailReport';

    public const TASK_SUCCESS_THUMBNAIL_REPORT = 'Task_Success_ThumbnailReport';

    public const TASK_FAIL_THUMBNAIL_REPORT = 'Task_Fail_ThumbnailReport';

    public const TASK_CREATED_THUMBNAIL_TEMPLATE = 'Task_Created_ThumbnailTemplate';

    public const TASK_DELETED_THUMBNAIL_TEMPLATE = 'Task_Deleted_ThumbnailTemplate';

    public const TASK_UPDATED_THUMBNAIL_TEMPLATE = 'Task_Updated_ThumbnailTemplate';

    public const TASK_IN_QUEUE_THUMBNAIL_TEMPLATE = 'Task_InQueue_ThumbnailTemplate';

    public const TASK_IN_PROCESS_THUMBNAIL_TEMPLATE = 'Task_InProcess_ThumbnailTemplate';

    public const TASK_SUCCESS_THUMBNAIL_TEMPLATE = 'Task_Success_ThumbnailTemplate';

    public const TASK_FAIL_THUMBNAIL_TEMPLATE = 'Task_Fail_ThumbnailTemplate';

    public const SUBSCRIPTION_RENEWED = 'Subscription_Renewed';

    public const SUBSCRIPTION_CREATED = 'Subscription_Created';

    public const FILE_RENAMED = 'File_Renamed';

    public const FILE_CONTENT_UPDATED = 'File_Content_Updated';

    public const FILE_DELETED = 'File_Deleted';

    public const FILE_MOVED = 'File_Moved';

    public const FILE_COPIED = 'File_Copied';

    public const FILE_TAGS_UPDATED = 'File_Tags_Updated';

    public const FILE_PERMISSIONS_UPDATED = 'File_Permissions_Updated';

    public const FILE_RESTORED = 'File_Restored';

    public const FILE_MOVED_TO_BIN = 'File_MovedToBin';

    public const FILE_UPDATED = 'File_Updated';

    public const TASK_CREATED_FTP_UPLOAD = 'Task_Created_FTPUpload';

    public const TASK_DELETED_FTP_UPLOAD = 'Task_Deleted_FTPUpload';

    public const TASK_UPDATED_FTP_UPLOAD = 'Task_Updated_FTPUpload';

    public const TASK_IN_QUEUE_FTP_UPLOAD = 'Task_InQueue_FTPUpload';

    public const TASK_IN_PROCESS_FTP_UPLOAD = 'Task_InProcess_FTPUpload';

    public const TASK_SUCCESS_FTP_UPLOAD = 'Task_Success_FTPUpload';

    public const TASK_FAIL_FTP_UPLOAD = 'Task_Fail_FTPUpload';

    public const FILE_CREATED = 'File_Created';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TASK_CREATED_EXPORT_TEMPLATE,
            self::TASK_CREATED_EXPORT_REPORT,
            self::TASK_CREATED_PREPARE_TEMPLATE,
            self::TASK_CREATED_FETCH,
            self::TASK_CREATED_EMAIL,
            self::TASK_CREATED_WEBHOOK,
            self::TASK_DELETED_EXPORT_TEMPLATE,
            self::TASK_DELETED_EXPORT_REPORT,
            self::TASK_DELETED_PREPARE_TEMPLATE,
            self::TASK_DELETED_FETCH,
            self::TASK_DELETED_EMAIL,
            self::TASK_DELETED_WEBHOOK,
            self::TASK_UPDATED_EXPORT_TEMPLATE,
            self::TASK_UPDATED_EXPORT_REPORT,
            self::TASK_UPDATED_PREPARE_TEMPLATE,
            self::TASK_UPDATED_FETCH,
            self::TASK_UPDATED_EMAIL,
            self::TASK_UPDATED_WEBHOOK,
            self::TASK_IN_QUEUE_EXPORT_TEMPLATE,
            self::TASK_IN_QUEUE_EXPORT_REPORT,
            self::TASK_IN_QUEUE_PREPARE_TEMPLATE,
            self::TASK_IN_QUEUE_FETCH,
            self::TASK_IN_QUEUE_EMAIL,
            self::TASK_IN_QUEUE_WEBHOOK,
            self::TASK_IN_PROCESS_EXPORT_TEMPLATE,
            self::TASK_IN_PROCESS_EXPORT_REPORT,
            self::TASK_IN_PROCESS_PREPARE_TEMPLATE,
            self::TASK_IN_PROCESS_FETCH,
            self::TASK_IN_PROCESS_EMAIL,
            self::TASK_IN_PROCESS_WEBHOOK,
            self::TASK_SUCCESS_EXPORT_TEMPLATE,
            self::TASK_SUCCESS_EXPORT_REPORT,
            self::TASK_SUCCESS_PREPARE_TEMPLATE,
            self::TASK_SUCCESS_FETCH,
            self::TASK_SUCCESS_EMAIL,
            self::TASK_SUCCESS_WEBHOOK,
            self::TASK_FAILED_EXPORT_TEMPLATE,
            self::TASK_FAILED_EXPORT_REPORT,
            self::TASK_FAILED_PREPARE_TEMPLATE,
            self::TASK_FAILED_FETCH,
            self::TASK_FAILED_EMAIL,
            self::TASK_FAILED_WEBHOOK,
            self::TASK_CREATED_THUMBNAIL_REPORT,
            self::TASK_DELETED_THUMBNAIL_REPORT,
            self::TASK_UPDATED_THUMBNAIL_REPORT,
            self::TASK_IN_QUEUE_THUMBNAIL_REPORT,
            self::TASK_IN_PROCESS_THUMBNAIL_REPORT,
            self::TASK_SUCCESS_THUMBNAIL_REPORT,
            self::TASK_FAIL_THUMBNAIL_REPORT,
            self::TASK_CREATED_THUMBNAIL_TEMPLATE,
            self::TASK_DELETED_THUMBNAIL_TEMPLATE,
            self::TASK_UPDATED_THUMBNAIL_TEMPLATE,
            self::TASK_IN_QUEUE_THUMBNAIL_TEMPLATE,
            self::TASK_IN_PROCESS_THUMBNAIL_TEMPLATE,
            self::TASK_SUCCESS_THUMBNAIL_TEMPLATE,
            self::TASK_FAIL_THUMBNAIL_TEMPLATE,
            self::SUBSCRIPTION_RENEWED,
            self::SUBSCRIPTION_CREATED,
            self::FILE_RENAMED,
            self::FILE_CONTENT_UPDATED,
            self::FILE_DELETED,
            self::FILE_MOVED,
            self::FILE_COPIED,
            self::FILE_TAGS_UPDATED,
            self::FILE_PERMISSIONS_UPDATED,
            self::FILE_RESTORED,
            self::FILE_MOVED_TO_BIN,
            self::FILE_UPDATED,
            self::TASK_CREATED_FTP_UPLOAD,
            self::TASK_DELETED_FTP_UPLOAD,
            self::TASK_UPDATED_FTP_UPLOAD,
            self::TASK_IN_QUEUE_FTP_UPLOAD,
            self::TASK_IN_PROCESS_FTP_UPLOAD,
            self::TASK_SUCCESS_FTP_UPLOAD,
            self::TASK_FAIL_FTP_UPLOAD,
            self::FILE_CREATED
        ];
    }
}


