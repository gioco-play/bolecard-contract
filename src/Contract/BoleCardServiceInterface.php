<?php
declare(strict_types=1);
namespace GiocoPlus\BoleCard\Contract;
/**
 * 交易
 */
interface BoleCardServiceInterface {

    /**
     * 遊戲啟動
     * @param string $account_with_op
     * @param string $delimiter
     * @param string $game_code
     * @return mixed
     */
    function gameLaunch(string $account_with_op, string $delimiter, string $game_code);

    /**
     * 遊戲詳情
     * @param string $account_with_op
     * @param string $delimiter
     * @param string $trace_id
     * @return mixed
     */
    function gameDetail(string $account_with_op, string $delimiter, string $bet_id);

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

