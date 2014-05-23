<?php

namespace Salma\SymCartBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OfferControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/off/l');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/off/{id}/s');
    }

}
