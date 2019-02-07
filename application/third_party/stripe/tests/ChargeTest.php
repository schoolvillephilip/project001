<?php

namespace Stripe;

class ChargeTest extends TestCase
{
    public function testUrls()
    {
        $this->assertSame(Charge::classUrl(), '/v1/charges');
        $charge = new Charge('abcd/efgh');
        $this->assertSame($charge->instanceUrl(), '/v1/charges/abcd%2Fefgh');
    }

    public function testCreate()
    {
        self::authorizeFromEnv();

        $c = Charge::create(
            array(
                'amount' => 100,
                'currency' => 'usd',
                'card' => 'tok_visa'
            )
        );
        $this->assertTrue($c->paid);
        $this->assertFalse($c->refunded);
    }

    public function testIdempotentCreate()
    {
        self::authorizeFromEnv();

        $c = Charge::create(
            array(
                'amount' => 100,
                'currency' => 'usd',
                'card' => 'tok_visa'
            ),
            array(
                'idempotency_key' => self::generateRandomString(),
            )
        );

        $this->assertTrue($c->paid);
        $this->assertSame(200, $c->getLastResponse()->code);
    }

    public function testRetrieve()
    {
        self::authorizeFromEnv();

        $c = Charge::create(
            array(
                'amount' => 100,
                'currency' => 'usd',
                'card' => 'tok_visa'
            )
        );
        $d = Charge::retrieve($c->id);
        $this->assertSame(200, $d->getLastResponse()->code);
        $this->assertSame($d->id, $c->id);
    }

    public function testUpdateMetadata()
    {
        self::authorizeFromEnv();

        $charge = Charge::create(
            array(
                'amount' => 100,
                'currency' => 'usd',
                'card' => 'tok_visa'
            )
        );

        $charge->metadata['test'] = 'foo bar';
        $charge->save();

        $updatedCharge = Charge::retrieve($charge->id);
        $this->assertSame('foo bar', $updatedCharge->metadata['test']);
    }

    public function testUpdateMetadataAll()
    {
        self::authorizeFromEnv();

        $charge = Charge::create(
            array(
                'amount' => 100,
                'currency' => 'usd',
                'card' => 'tok_visa'
            )
        );

        $charge->metadata = array('test' => 'foo bar');
        $charge->save();
        $this->assertSame(200, $charge->getLastResponse()->code);

        $updatedCharge = Charge::retrieve($charge->id);
        $this->assertSame('foo bar', $updatedCharge->metadata['test']);
    }

    public function testMarkAsFraudulent()
    {
        self::authorizeFromEnv();

        $charge = Charge::create(
            array(
                'amount' => 100,
                'currency' => 'usd',
                'card' => 'tok_visa'
            )
        );

        $charge->refunds->create();
        $charge->markAsFraudulent();

        $updatedCharge = Charge::retrieve($charge->id);
        $this->assertSame(
            'fraudulent',
            $updatedCharge['fraud_details']['user_report']
        );
    }

    public function testCreateWithBitcoinReceiverSource()
    {
        self::authorizeFromEnv();

        $receiver = $this->createTestBitcoinReceiver("do+fill_now@stripe.com");

        $charge = Charge::create(
            array(
                'amount' => 100,
                'currency' => 'usd',
                'source' => $receiver->id
            )
        );

        $this->assertSame($receiver->id, $charge->source->id);
        $this->assertSame("bitcoin_receiver", $charge->source->object);
        $this->assertSame("succeeded", $charge->status);
        $this->assertInstanceOf('Stripe\\BitcoinReceiver', $charge->source);
    }

    public function markAsSafe()
    {
        self::authorizeFromEnv();

        $charge = Charge::create(
            array(
                'amount' => 100,
                'currency' => 'usd',
                'card' => 'tok_visa'
            )
        );

        $charge->markAsSafe();

        $updatedCharge = Charge::retrieve($charge->id);
        $this->assertSame('safe', $updatedCharge['fraud_details']['user_report']);
    }
}
