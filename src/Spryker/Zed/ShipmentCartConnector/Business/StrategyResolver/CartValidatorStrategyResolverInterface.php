<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ShipmentCartConnector\Business\StrategyResolver;

use Spryker\Zed\ShipmentCartConnector\Business\Cart\ShipmentCartValidatorInterface;

/**
 * @deprecated Will be removed in next major release.
 */
interface CartValidatorStrategyResolverInterface
{
    public const STRATEGY_KEY_WITHOUT_MULTI_SHIPMENT = 'STRATEGY_KEY_WITHOUT_MULTI_SHIPMENT';
    public const STRATEGY_KEY_WITH_MULTI_SHIPMENT = 'STRATEGY_KEY_WITH_MULTI_SHIPMENT';

    /**
     * @return \Spryker\Zed\ShipmentCartConnector\Business\Cart\ShipmentCartValidatorInterface
     */
    public function resolve(): ShipmentCartValidatorInterface;
}
