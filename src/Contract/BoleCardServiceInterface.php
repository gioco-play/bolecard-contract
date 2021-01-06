<?php
declare(strict_types=1);
namespace GiocoPlus\BoleCard\Contract;
/**
 * 交易
 */
interface BoleCardServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @return void
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

    /**
     * 遊戲紀錄
     * @param string $op_code
     * @param int $start_time
     * @param int $end_time
     * @param int $page
     * @param int $page_size
     * @return mixed
     */
    function gameRecord(string $op_code, int $start_time, int $end_time, int $page, int $page_size);
}

