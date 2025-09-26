<?php

namespace App\Services\Interfaces;

/**
 * Interface VoucherServiceInterface
 * @package App\Services\Interfaces
 */
interface VoucherServiceInterface 
{
    public function paginate($request);
    public function getVoucherForProduct($id, $carts = null, $customerId, $product);
}
