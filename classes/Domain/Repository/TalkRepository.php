<?php

declare(strict_types=1);

/**
 * Copyright (c) 2013-2018 OpenCFP
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/opencfp/opencfp
 */

namespace OpenCFP\Domain\Repository;

use OpenCFP\Domain\EntityNotFoundException;
use OpenCFP\Domain\Model\Talk;

interface TalkRepository
{
    /**
     * 
     *
     * @param int $id
     *
     * @throws EntityNotFoundException
     *
     * @return 
     */
    public function findById(int $id): Talk;

    /**
     * 
     *
     * @param Talk $user
     */
    public function persist(Talk $talk);
}
