<?php

/**
 * @copyright Nucleus Security. See COPYRIGHT.md for full copyright details
 */

declare(strict_types=1);

namespace App\Review;

/**
 * The Cart class allows to add/remove item on the cart and get the total cost.
 *
 * The code is written by a junior developer. As a senior developer,
 * you are asked to review the code.
 *
 * Please review the code and focus high impact issues.
 */
class Cart
{
    // Simple version for lookup table
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
