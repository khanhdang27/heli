<?php

namespace App\Models;

use Bavix\Wallet\Exceptions\AmountInvalid;
use Bavix\Wallet\Exceptions\BalanceIsEmpty;
use Bavix\Wallet\Exceptions\InsufficientFunds;
use Bavix\Wallet\Interfaces\Product;
use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Models\Transaction;
use Bavix\Wallet\Models\Transfer;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseMembershipDiscount extends Model implements Product
{
    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'course_membership_discounts';
    use HasWallet;
    public function membershipCourses()
    {
        return $this->belongsTo(MembershipCourse::class, 'membership_course_id', 'id');
    }

    public function courseDiscounts()
    {
        return $this->belongsTo(CourseDiscount::class, 'course_discount_id', 'id');
    }

    public function getPrice()
    {
        return $this->membershipCourses->price_value;
    }

    public function getDiscount()
    {
        if ($this->courseDiscounts) {
            return $this->courseDiscounts->discount_value;
        }

        return 0;
    }

    public function getPriceDiscount()
    {
        return $this->getPrice() - ($this->getPrice() * $this->getDiscount()) / 100;
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
        return $this->getPriceDiscount();
    }

    public function getMetaProduct(): ?array
    {
        return [
            'title' => 'course',
            'description' => 'Purchase of Product course',
        ];
    }

    public function getUniqueId(): string
    {
        return (string) $this->getKey();
    }
}
