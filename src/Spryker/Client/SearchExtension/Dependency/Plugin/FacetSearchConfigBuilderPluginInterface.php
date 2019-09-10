<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\SearchExtension\Dependency\Plugin;

use Spryker\Client\SearchExtension\Config\FacetConfigBuilderInterface;

interface FacetSearchConfigBuilderPluginInterface
{
    /**
     * Specification:
     * - Builds facet search configuration.
     *
     * @api
     *
     * @param \Spryker\Client\SearchExtension\Config\FacetConfigBuilderInterface $facetConfigBuilder
     *
     * @return void
     */
    public function buildFacetConfig(FacetConfigBuilderInterface $facetConfigBuilder): void;
}