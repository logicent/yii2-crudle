<?php

namespace crudle\app\setup\enums;

use crudle\app\setup\models\DataImport;
use crudle\app\setup\models\DataModel;
use crudle\app\setup\models\DbBackupSettingsForm;
use crudle\app\setup\models\EmailNotification;
use crudle\app\setup\models\EmailQueue;
use crudle\app\setup\models\EmailTemplate;
use crudle\app\setup\models\GeneralSettingsForm;
use crudle\app\setup\models\LayoutSettingsForm;
use crudle\app\setup\models\PrinterSettingsForm;
use crudle\app\setup\models\PrintFormat;
use crudle\app\setup\models\PrintSettingsForm;
use crudle\app\setup\models\PrintStyle;
use crudle\app\setup\models\Role;
use crudle\app\setup\models\Setup;
use crudle\app\setup\models\SmtpSettingsForm;
use crudle\app\setup\models\User;
use crudle\app\setup\models\UserGroup;
use crudle\app\setup\models\UserLog;
use yii\helpers\ArrayHelper;

class Type_Model extends \crudle\app\main\enums\Type_Model
{
    const DataImport        = 'Data Import';
    const DataModel         = 'Data Model';
    const DatabaseBackup    = 'Database Backup';
    const EmailNotification = 'Email Notification';
    const EmailQueue        = 'Email Queue';
    const EmailTemplate     = 'Email Template';
    const GeneralSettings   = 'General Settings';
    const LayoutSettings    = 'Layout Settings';
    const PrintFormat       = 'Print Format';
    const PrintSettings     = 'Print Settings';
    const PrintStyle        = 'Print Style';
    const PrinterSettings   = 'Printer Settings';
    const Role              = 'Role';
    const Setup             = 'Setup';
    const SmtpSettings      = 'Smtp Settings';
    const User              = 'User';
    const UserGroup         = 'User Group';
    const UserLog           = 'User Log';

    public static function enums()
    {
        return ArrayHelper::merge(parent::enums(), [
            self::DataImport        => self::DataImport,
            self::DataModel         => self::DataModel,
            self::DatabaseBackup    => self::DatabaseBackup,
            self::EmailNotification => self::EmailNotification,
            self::EmailQueue        => self::EmailQueue,
            self::EmailTemplate     => self::EmailTemplate,
            self::GeneralSettings   => self::GeneralSettings,
            self::LayoutSettings    => self::LayoutSettings,
            self::PrintFormat       => self::PrintFormat,
            self::PrintSettings     => self::PrintSettings,
            self::PrintStyle        => self::PrintStyle,
            self::PrinterSettings   => self::PrinterSettings,
            self::Setup             => self::Setup,
            self::SmtpSettings      => self::SmtpSettings,
            self::Role              => self::Role,
            self::User              => self::User,
            self::UserGroup         => self::UserGroup,
            self::UserLog           => self::UserLog,
        ]);
    }

    public static function modelClasses()
    {
        return ArrayHelper::merge(parent::modelClasses(), [
            self::DataImport        => DataImport::class,
            self::DataModel         => DataModel::class,
            self::DatabaseBackup    => DbBackupSettingsForm::class,
            self::EmailNotification => EmailNotification::class,
            self::EmailQueue        => EmailQueue::class,
            self::EmailTemplate     => EmailTemplate::class,
            self::GeneralSettings   => GeneralSettingsForm::class,
            self::LayoutSettings    => LayoutSettingsForm::class,
            self::PrintFormat       => PrintFormat::class,
            self::PrintSettings     => PrintSettingsForm::class,
            self::PrintStyle        => PrintStyle::class,
            self::PrinterSettings   => PrinterSettingsForm::class,
            self::Role              => Role::class,
            self::Setup             => Setup::class,
            self::SmtpSettings      => SmtpSettingsForm::class,
            self::User              => User::class,
            self::UserGroup         => UserGroup::class,
            self::UserLog           => UserLog::class,
        ]);
    }
}
