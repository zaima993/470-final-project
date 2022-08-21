<?php

class donation
{
    public int $donationMoney;
    public static int $tax = 1;
    public function getDonation(): int
    {
        return $this->donationMoney * self::$tax;
    }
}