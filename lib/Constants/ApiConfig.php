<?php

namespace Heidelpay\PhpPaymentApi\Constants;

/**
 * Class for PHP Payment API config & information constants
 *
 * @license Use of this software requires acceptance of the License Agreement. See LICENSE file.
 * @copyright Copyright © 2017-present heidelpay GmbH. All rights reserved.
 *
 * @link http://dev.heidelpay.com/php-payment-api
 *
 * @author Stephano Vogel <development@heidelpay.com>
 *
 * @package heidelpay\php-payment-api\constants
 *
 * @since 1.3.0 First time this was introduced.
 */
class ApiConfig
{
    const SDK_VERSION = 'v1.7.1';

    const LIVE_URL = 'https://heidelpay.hpcgw.net/ngw/post';
    const TEST_URL = 'https://test-heidelpay.hpcgw.net/ngw/post';

    const CANCEL_TEST_URL = 'https://test-heidelpay.hpcgw.net/ngw/transaction/cancel';
    const CANCEL_LIVE_URL = 'https://heidelpay.hpcgw.net/ngw/transaction/cancel';
}
