<?php

/*
 * This file is part of gpupo/common
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For more information, see
 * <http://www.g1mr.com/common/>.
 */

namespace Gpupo\Tests\Common\Objects;

use Gpupo\Common\Interfaces\LoggerInterface;
use Gpupo\Common\Traits\LoggerTrait;

class HasLogger extends AbstractObject implements LoggerInterface
{
    use LoggerTrait;
}
