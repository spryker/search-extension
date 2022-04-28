<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\SearchExtension\Dependency\Plugin;

interface ResultFormatterPluginInterface
{
    /**
     * Specification:
     * - Returns the name for the current formatter.
     *
     * @api
     *
     * @return string
     */
    public function getName();

    /**
     * Specification:
     * - Formats the result.
     *
     * @api
     *
     * @param mixed $searchResult
     * @param array<string, mixed> $requestParameters
     *
     * @return mixed
     */
    public function formatResult($searchResult, array $requestParameters = []);
}
