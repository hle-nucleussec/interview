<?php

/**
 * @copyright Nucleus Security. See COPYRIGHT.md for full copyright details
 */

declare(strict_types=1);

namespace App\Review;

/**
 * Here is a new class that requires to be reviewed.
 *
 * The Cart class allows to add/remove item on the cart and get the total cost.
 */
class Cart
{
    public const priceList = [
        'apple' => 10,
        'orange' => 20,
        'strawberry' => 30
    ];
    public $cart_items = [];
    public $total;

    /**
     * Get price for the item
     */
    protected function getPrice($name) {
        return self::priceList[$name];
    }

    /**
     * Add an item to the cart
     */
    public function addItem($name, $quantity = 1) {
        $this->cart_items[] = [
            'name' => $name,
            'quantity' => $quantity
        ];
        $this->total += $this->getPrice($name) * $quantity;
    }

    /**
     * Remove an item from the cart
     */
    public function removeItem($name) {
        foreach ($this->cart_items as $key => $item) {
            if ($item['name'] == $name) {
                $this->total -= $this->getPrice($name) * $item['quantity'];
            }
        }
    }

    /**
     * Get the total cost of the cart
     */
    public function getTotal() {
        return $this->total;
    }
}
