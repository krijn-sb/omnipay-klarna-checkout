<?php

namespace MyOnlineStore\Tests\Omnipay\KlarnaCheckout\Message;

use MyOnlineStore\Omnipay\KlarnaCheckout\Message\VoidResponse;
use Omnipay\Tests\TestCase;

class VoidResponseTest extends TestCase
{
    public function testIsSuccessfulWillReturnTrue()
    {
        $response = new VoidResponse($this->getMockRequest(), []);
        self::assertTrue($response->isSuccessful());
    }
}
