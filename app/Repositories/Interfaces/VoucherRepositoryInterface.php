<?php

namespace App\Repositories\Interfaces;

/**
 * Interface  VoucherServiceInterface
 * @package App\Services\Interfaces
 */
interface VoucherRepositoryInterface extends BaseRepositoryInterface
{
    public function voucherPagination(
        array $column = ['*'], 
        array $condition = [], 
        int $perPage = 1,
        array $extend = [],
        array $orderBy = ['id', 'DESC'],
        array $join = [],
        array $relations = [],
    );
    public function getVoucherForProduct($id = 0, $customerId = 0);
    public function findVouchersCart($productsIDs = [], $customerId = 0);
    public function findVoucherByCondition($voucher_scope);
    public function getDiscountVoucherTotal($total = 0 , $id);
    public function getDiscountVoucherForCart($total = 0 , $id);
    public function getProductByVoucher($voucherId = 0);
}
