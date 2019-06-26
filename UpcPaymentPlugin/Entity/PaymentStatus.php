<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\UpcPaymentPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Master\AbstractMasterEntity;

/**
 * PaymentStatus
 *
 * @ORM\Table(name="plg_upc_payment_payment_status")
 * @ORM\Entity(repositoryClass="Plugin\UpcPaymentPlugin\Repository\PaymentStatusRepository")
 */
class PaymentStatus extends AbstractMasterEntity
{
    /**
     * 定数名は適宜変更してください.
     */

    /**
     * 未決済
     */
    const OUTSTANDING = 1;
    /**
     * 有効性チェック済
     */
    const ENABLED = 2;
    /**
     * 仮売上
     */
    const PROVISIONAL_SALES = 3;
    /**
     * 実売上
     */
    const ACTUAL_SALES = 4;
    /**
     * キャンセル
     */
    const CANCEL = 5;

    /**
     * 中国決済
     */

    /**
     * 申し込み
     */
    const REQUEST = 6;

    /**
     * 売上
     */
    const SALES = 7;

    /**
     * オート銀振り
     */

    /**
     * 仮貸出
     */
    const EBPRERENTAL = 8;

    /**
     * 貸出
     */
    const EBRENTAL = 9;

    /**
     * 入金完了
     */
    const EBTRANSFER = 10;


}
