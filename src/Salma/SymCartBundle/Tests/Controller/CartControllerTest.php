<?php

namespace Salma\SymCartBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CartControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cart/add');
    }

    public function testCheckout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cart/checkout');
    }

    public function testEmpty()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cart/empty');
    }

    public function testRemvitem()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cart/remvitem/{id}');
    }

}
