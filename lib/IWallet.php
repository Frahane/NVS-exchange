<?php
namespace lib;

interface IWallet {
    public function getMinSum(): float;
    public function setMinSum(float $sum);
    public function getWalletName(): string;
    public function getWalletDescription(): string;
    public function generateAddress();
    public function getRecievedByAddress(string $addr);
    public function checkRecievedByAddress(string $addr);
}
