<?php

/*
 * This file is part of gpupo/common-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For more information, see
 * <http://www.g1mr.com/common-sdk/>.
 */

namespace Gpupo\CommonSdk\Console;

use Gpupo\Common\Console\AbstractApplication as Core;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

abstract class AbstractApplication extends Core
{
    public function factoryLogger()
    {
        $logger = new Logger('bin');
        $logger->pushHandler(new StreamHandler('Resources/logs/main.log', Logger::DEBUG));

        return $logger;
    }
}
