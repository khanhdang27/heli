<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Product;
use Bavix\Wallet\Interfaces\Customer;

class SkipLevel extends Model implements Product
{
    use HasWallet;

    private $id = 9999;
    private $price = 0;

    function __construct($price)
    {
        parent::__construct();
        $this->price = $price;
    }

    public function canBuy(Customer $customer, int $quantity = 1, bool $force = null): bool
    {
        /**
         * If the service can be purchased once, then
         *  return !$customer->paid($this);
         */
        return true;
    }

    public function getAmountProduct(Customer $customer)
    {
        return $this->price;
    }

    public function getMetaProduct(): ?array
    {
        return [
            'title' => 'skip level',
            'description' => 'Purchase to Skip Level',
        ];
    }

    public function getUniqueId(): string
    {
        return (string) dechex(time());
    }
}
