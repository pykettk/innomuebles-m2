<?php
/**
 * @copyright Copyright (c)  2019 Alignet  (https://www.pay-me.com)
 */

namespace Alignet\Paymecheckout\Model\Client\Classic\MethodCaller\SoapClient;

class Order extends \Zend\Soap\Client
{
    /**
     * @var int
     */
    protected $soapVersion = SOAP_1_1;
}
