<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SearchExtension\Dependency\Plugin;

use Psr\Log\LoggerInterface;

interface InstallPluginInterface
{
    /**
     * Specification:
     * - Finds schema definition files in modules.
     * - Installs or update schemas by found schema definition files.
     *
     * @api
     *
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return void
     */
    public function install(LoggerInterface $logger): void;

    /**
     * Specification:
     * - Finds index definition files in modules.
     * - Creates or update IndexMapper classes by found index definition files.
     *
     * @api
     *
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return void
     */
    public function installMapper(LoggerInterface $logger): void;
}
