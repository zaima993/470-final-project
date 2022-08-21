<?php

class donationTest extends \PHPUnit\Framework\TestCase
{
    public function testnew(){
        $functions = require __DIR__.'/../Controller/donation.php';
        $functions = new donation();
        $functions->donationMoney = 10;

        $total = $functions->getDonation();
        $this->assertEquals(10,$total);
    }
}