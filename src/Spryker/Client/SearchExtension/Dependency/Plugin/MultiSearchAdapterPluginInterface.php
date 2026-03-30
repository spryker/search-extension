<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\SearchExtension\Dependency\Plugin;

interface MultiSearchAdapterPluginInterface
{
    /**
     * Specification:
     * - Executes multiple search queries in a single batch request to the search engine.
     * - Each query is identified by a string key.
     * - Returns results keyed by the same keys as the input queries.
     *
     * @api
     *
     * @param array<string, \Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface> $searchQueries
     * @param array<string, array<\Spryker\Client\SearchExtension\Dependency\Plugin\ResultFormatterPluginInterface>> $resultFormattersPerQuery
     * @param array<string, mixed> $requestParameters
     *
     * @return array<string, mixed>
     */
    public function multiSearch(array $searchQueries, array $resultFormattersPerQuery, array $requestParameters = []): array;
}
