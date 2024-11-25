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

namespace Espo\Modules\Crm\Hooks\CaseObj;

use Espo\Core\FieldProcessing\Stream\FollowersLoader;
use Espo\Core\Hook\Hook\AfterSave;
use Espo\Modules\Crm\Entities\CaseObj;
use Espo\ORM\Entity;
use Espo\ORM\Repository\Option\SaveOptions;
use Espo\Services\Stream;


/**
 * @implements AfterSave<CaseObj>
 */
class IsInternal implements AfterSave
{
    public function __construct(
        private Stream $streamService,
        private FollowersLoader $followersLoader,
    ) {}

    public function afterSave(Entity $entity, SaveOptions $options): void
    {
        $this->processUnfollowPortalUsers($entity);
    }

    private function processUnfollowPortalUsers(CaseObj $entity): void
    {
        if (!$entity->isInternal() || $entity->isNew()) {
            return;
        }

        $this->streamService->unfollowPortalUsersFromEntity($entity);

        $this->followersLoader->processFollowers($entity);
    }
}