<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2023 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

namespace Espo\Core\Utils\Database\DetailsProviders;

use Espo\Core\Utils\Database\DetailsProvider;
use PDO;

class PostgresqlDetailsProvider implements DetailsProvider
{
    private const TYPE_POSTGRESQL = 'PostgreSQL';

    public function __construct(private PDO $pdo)
    {}

    public function getType(): string
    {
       return self::TYPE_POSTGRESQL;
    }

    public function getVersion(): string
    {
        $fullVersion = $this->getFullDatabaseVersion() ?? '';

        if (preg_match('/[0-9]+\.[0-9]+/', $fullVersion, $match)) {
            return $match[0];
        }

        return '0.0';
    }

    public function getServerVersion(): string
    {
        return (string) $this->getParam('version');
    }

    public function getParam(string $name): ?string
    {
        $sql = "SHOW " . $this->pdo->quote($name);;

        $sth = $this->pdo->prepare($sql);
        $row = $sth->fetch(PDO::FETCH_NUM);

        $index = 1;

        $value = $row[$index] ?: null;

        if ($value === null) {
            return null;
        }

        return (string) $value;
    }

    private function getFullDatabaseVersion(): ?string
    {
        $sql = "select version()";

        $sth = $this->pdo->prepare($sql);
        $sth->execute();

        /** @var string|null|false $result */
        $result = $sth->fetchColumn();

        if ($result === false || $result === null) {
            return null;
        }

        return $result;
    }
}
