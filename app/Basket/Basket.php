<?php
namespace App\Basket;

use App\Product;
use App\Basket\Exceptions\QuantityExceededException;
use App\Support\Storage\SessionStorage;


class Basket
{
    protected $storage;
    protected $product;

    public function __construct(Product $product = null)
    {
        $this->storage = new SessionStorage;
        if ($product) {
            $this->product = $product;
        }  else {
            $this->product = new Product;
        }
    }

    public function pushProduct(Product $product, $quantity)
    {
        if ($this->has($product)) {
            $quantity = $this->get($product)['quantity'] + $quantity;
        }

        $this->updateProduct($product, $quantity);
    }

    public function updateProduct(Product $product, $quantity)
    {
        if ($quantity == 0) {
            $this->remove($product);
            return;
        }


        $this->storage->set($product->id, [
            'product_id' => (int) $product->id,
            'quantity' => (int) $quantity
        ]);
    }

    public function remove(Product $product)
    {
        $this->storage->unset($product->id);
    }

    public function has(Product $product)
    {
        return $this->storage->exists($product->id);
    }

    public function get(Product $product)
    {
        return $this->storage->get($product->id);
    }

    public function clear() {
        $this->storage->clear();
    }

    public function all()
    {
        $ids = [];
        $items = [];

        foreach ($this->storage->all() as $product) {
            $ids[] = $product['product_id'];
        }

        $products = $this->product->find($ids);

        foreach ($products as $product) {
            $product->quantity = $this->get($product)['quantity'];
            $items[] = $product;
        }

        return $items;
    }

    public function itemCount()
    {
        return count($this->storage);
    }
    public function refresh()
    {
        foreach ($this->all() as $item) {
            if (!$item->getHasStock($item->quantity)) {
                $this->update($item, $item->stock);
            }
        }
    }
}
