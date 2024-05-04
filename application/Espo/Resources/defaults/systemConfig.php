<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM – Open Source CRM application.
 * Copyright (C) 2014-2024 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

return [
    'defaultPermissions' => [
        'dir' => '0755',
        'file' => '0644',
        'user' => '',
        'group' => '',
    ],
    'crud' => [
        'get' => 'read',
        'post' => 'create',
        'put' => 'update',
        'patch' => 'patch',
        'delete' => 'delete',
    ],
    'systemUserAttributes' => [
        'lastName' => 'System',
    ],
    'systemItems' => [
        'systemItems',
        'adminItems',
        'superAdminItems',
        'configPath',
        'cachePath',
        'database',
        'crud',
        'logger',
        'isInstalled',
        'systemUser',
        'defaultPermissions',
        'passwordSalt',
        'cryptKey',
        'apiSecretKeys',
        'hashSecretKey',
        'restrictedMode',
        'instanceId',
        'adminUpgradeDisabled',
        'userLimit',
        'portalUserLimit',
        'stylesheet',
        'userItems',
        'globalItems',
        'internalSmtpServer',
        'internalSmtpPort',
        'internalSmtpAuth',
        'internalSmtpUsername',
        'internalSmtpPassword',
        'internalSmtpSecurity',
        'internalOutboundEmailFromAddress',
        'requiredPhpVersion',
        'requiredMysqlVersion',
        'requiredPostgresqlVersion',
        'recommendedMysqlParams',
        'requiredPhpLibs',
        'recommendedPhpLibs',
        'recommendedPhpParams',
        'requiredMariadbVersion',
        'recommendedMariadbParams',
        'phpExecutablePath',
        'webSocketDebugMode',
        'webSocketSslCertificateFile',
        'webSocketSslCertificateLocalPrivateKey',
        'webSocketSslCertificatePassphrase',
        'webSocketSslAllowSelfSigned',
        'webSocketUseSecureServer',
        'webSocketPort',
        'webSocketZeroMQSubscriberDsn',
        'webSocketZeroMQSubmissionDsn',
        'webSocketMessager',
        'actualDatabaseType',
        'actualDatabaseVersion',
        'clientSecurityHeadersDisabled',
        'clientCspDisabled',
        'clientCspScriptSourceList',
        'authTokenSecretDisabled',
        'authLogDisabled',
        'authApiUserLogDisabled',
        'authFailedAttemptsPeriod',
        'authMaxFailedAttemptNumber',
        'ipAddressServerParam',
        'jobNoTableLocking',
        'passwordRecoveryRequestLifetime',
        'passwordChangeRequestNewUserLifetime',
        'passwordChangeRequestExistingUserLifetime',
        'passwordRecoveryInternalIntervalPeriod',
        'cleanupAppLog',
        'cleanupAppLogPeriod',
    ],
    'adminItems' => [
        'devMode',
        'smtpServer',
        'smtpPort',
        'smtpAuth',
        'smtpSecurity',
        'smtpUsername',
        'smtpPassword',
        'jobMaxPortion',
        'jobPeriod',
        'jobRerunAttemptNumber',
        'jobRunInParallel',
        'jobPoolConcurrencyNumber',
        'jobPeriodForActiveProcess',
        'jobForceUtc',
        'cronMinInterval',
        'daemonInterval',
        'daemonProcessTimeout',
        'daemonMaxProcessNumber',
        'authenticationMethod',
        'adminPanelIframeHeight',
        'adminPanelIframeUrl',
        'adminPanelIframeDisabled',
        'ldapHost',
        'ldapPort',
        'ldapSecurity',
        'ldapAuth',
        'ldapUsername',
        'ldapPassword',
        'ldapBindRequiresDn',
        'ldapBaseDn',
        'ldapUserLoginFilter',
        'ldapAccountCanonicalForm',
        'ldapAccountDomainName',
        'ldapAccountDomainNameShort',
        'ldapAccountFilterFormat',
        'ldapTryUsernameSplit',
        'ldapOptReferrals',
        'ldapPortalUserLdapAuth',
        'ldapCreateEspoUser',
        'ldapAccountDomainName',
        'ldapAccountDomainNameShort',
        'ldapUserNameAttribute',
        'ldapUserFirstNameAttribute',
        'ldapUserLastNameAttribute',
        'ldapUserTitleAttribute',
        'ldapUserEmailAddressAttribute',
        'ldapUserPhoneNumberAttribute',
        'ldapUserObjectClass',
        'maxEmailAccountCount',
        'massEmailMaxPerHourCount',
        'massEmailMaxPerBatchCount',
        'massEmailSiteUrl',
        'personalEmailMaxPortionSize',
        'inboundEmailMaxPortionSize',
        'authTokenLifetime',
        'authTokenMaxIdleTime',
        'ldapUserDefaultTeamId',
        'ldapUserDefaultTeamName',
        'ldapUserTeamsIds',
        'ldapUserTeamsNames',
        'ldapPortalUserPortalsIds',
        'ldapPortalUserPortalsNames',
        'ldapPortalUserRolesIds',
        'ldapPortalUserRolesNames',
        'cleanupJobPeriod',
        'emailAutoReplySuppressPeriod',
        'emailAutoReplyLimit',
        'cleanupActionHistoryPeriod',
        'adminNotifications',
        'adminNotificationsNewVersion',
        'adminNotificationsCronIsNotConfigured',
        'adminNotificationsNewExtensionVersion',
        'leadCaptureAllowOrigin',
        'cronDisabled',
        'defaultPortalId',
        'cleanupDeletedRecords',
        'cleanupSubscribers',
        'cleanupSubscribersPeriod',
        'cleanupAudit',
        'cleanupAuditPeriod',
        'authTokenPreventConcurrent',
        'emailParser',
        'passwordRecoveryDisabled',
        'passwordRecoveryNoExposure',
        'passwordRecoveryForAdminDisabled',
        'passwordRecoveryForInternalUsersDisabled',
        'passwordRecoveryRequestDelay',
        'thumbImageCacheDisabled',
        'emailReminderPortionSize',
        'outboundSmsFromNumber',
        'currencyNoJoinMode',
        'authAnotherUserDisabled',
        'emailAddressEntityLookupDefaultOrder',
        'phoneNumberEntityLookupDefaultOrder',
        'customPrefixDisabled',
        'noteAclLimit',
        'noteAclPeriod',
        'latestVersion',
    ],
    'superAdminItems' => [
        'jobMaxPortion',
        'jobPeriod',
        'jobRerunAttemptNumber',
        'jobRunInParallel',
        'jobPoolConcurrencyNumber',
        'jobPeriodForActiveProcess',
        'appLogAdminAllowed',
        'cronMinInterval',
        'daemonInterval',
        'daemonProcessTimeout',
        'daemonMaxProcessNumber',
        'adminPanelIframeUrl',
        'adminPanelIframeDisabled',
        'adminPanelIframeHeight',
        'cronDisabled',
        'maintenanceMode',
        'siteUrl',
        'useWebSocket',
        'webSocketUrl',
    ],
    'userItems' => [],
    'globalItems' => [
        'cacheTimestamp',
        'appTimestamp',
        'language',
        'isDeveloperMode',
        'theme',
        'dateFormat',
        'timeFormat',
        'timeZone',
        'decimalMark',
        'weekStart',
        'thousandSeparator',
        'companyLogoId',
        'applicationName',
        'jsLibs',
        'maintenanceMode',
        'siteUrl',
        'useCache',
        'useCacheInDeveloperMode',
        'isDeveloperMode',
        'useWebSocket',
        'webSocketUrl',
        'aclAllowDeleteCreated',
    ],
    'isInstalled' => false,
    'requiredPhpVersion' => '8.1.0',
    'requiredPhpLibs' => [
        'json',
        'openssl',
        'mbstring',
        'zip',
        'gd',
        'iconv'
    ],
    'recommendedPhpLibs' => [
        'curl',
        'xml',
        'xmlwriter',
        'exif',
    ],
    'recommendedPhpParams' => [
        'max_execution_time' => 180,
        'max_input_time' => 180,
        'memory_limit' => '256M',
        'post_max_size' => '20M',
        'upload_max_filesize' => '20M',
    ],
    'requiredMysqlVersion' => '5.7.0',
    'recommendedMysqlParams' => [],
    'requiredMariadbVersion' => '10.2.2',
    'requiredPostgresqlVersion' => '15.0',
    'recommendedMariadbParams' => [],
    /** Max execution time (in seconds) allocated for a single job. If exceeded then set to Failed.*/
    'jobPeriod' => 7800,
    /** Max execution time (in seconds) allocated for a single job with active process.
      * If exceeded then set to Failed. */
    'jobPeriodForActiveProcess' => 36000,
    /** Number of attempts to re-run failed jobs. */
    'jobRerunAttemptNumber' => 1,
    /** Min interval (in seconds) between two CRON runs. */
    'cronMinInterval' => 2,
];
