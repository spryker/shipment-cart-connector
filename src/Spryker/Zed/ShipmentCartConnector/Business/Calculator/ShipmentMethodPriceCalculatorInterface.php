<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ShipmentCartConnector\Business\Calculator;

use Generated\Shared\Transfer\MoneyValueTransfer;
use Generated\Shared\Transfer\ShipmentMethodTransfer;

interface ShipmentMethodPriceCalculatorInterface
{
    public function applySourcePrices(MoneyValueTransfer $moneyValueTransfer, ShipmentMethodTransfer $shipmentMethodTransfer): MoneyValueTransfer;
}
