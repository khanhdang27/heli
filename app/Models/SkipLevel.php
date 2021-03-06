<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Product;
use Bavix\Wallet\Interfaces\Customer;

class SkipLevel extends Model implements Product
{
    use HasWallet;

    protected $guarded = [];

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
        return $this->tokens;
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
        return (string) $this->getKey();
    }
}
