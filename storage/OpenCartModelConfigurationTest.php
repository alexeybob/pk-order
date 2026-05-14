<?php

use App\Models\OpenCart\OpenCartModel;
use App\Models\OpenCartCategory;
use App\Models\OpenCartCustomer;
use App\Models\OpenCartOrder;
use App\Models\OpenCartOrderProduct;
use App\Models\OpenCartProduct;

dataset('opencart_models', [
    [OpenCartCustomer::class, 'customer', 'customer_id'],
    [OpenCartOrder::class, 'order', 'order_id'],
    [OpenCartProduct::class, 'product', 'product_id'],
    [OpenCartOrderProduct::class, 'order_product', 'order_product_id'],
    [OpenCartCategory::class, 'category', 'category_id'],
]);

test('opencart models use the opencart configuration', function (string $modelClass, string $table, string $primaryKey) {
    $model = new $modelClass;

    expect($model->getConnectionName())->toBe('opencart')
        ->and($model->getTable())->toBe($table)
        ->and($model->getKeyName())->toBe($primaryKey)
        ->and($model->timestamps)->toBeFalse();
})->with('opencart_models');

test('opencart models extend the shared base model', function (string $modelClass) {
    expect(is_subclass_of($modelClass, OpenCartModel::class))->toBeTrue();
})->with([
    OpenCartCustomer::class,
    OpenCartOrder::class,
    OpenCartProduct::class,
    OpenCartOrderProduct::class,
    OpenCartCategory::class,
]);
