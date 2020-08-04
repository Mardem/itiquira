<?php


namespace App\Support\Titles;


class PlansTitle
{
    /**
     * Indica se o limite de dependentes foi atingido
     * true => atingiu
     * false => não atingiu
     *
     * @param $dependents
     * @param $type
     * @return bool
     */
    public static function isLimitDependent($dependents, $type)
    {
        $status = false;
        if ($type == 'LIGTH') {
            // 4 dependentes
            $dependents->count() >= 4 ? $status = true : $status = false;
        } else if ($type == 'PLUS') {
            // 5 dependentes
            $dependents->count() >= 5 ? $status = true : $status = false;
        } else if ($type == 'GOLD') {
            // 6 dependentes
            $dependents->count() >= 6 ? $status = true : $status = false;
        } else if($type == 'VIP') {
            // 7 dependentes
            $dependents->count() >= 7 ? $status = true : $status = false;
        }
        return $status;
    }

    /**
     * Mostra a quantidade restante de dependentes do cliente
     * @param $dependents
     * @param $type
     * @return int
     */
    public static function restDependent($dependents, $type)
    {
        $rest = 0;
        if ($type == 'LIGTH') {
            // 4 dependentes
            $rest = 4 - $dependents->count();
        } else if ($type == 'PLUS') {
            // 5 dependentes
            $rest = 5 - $dependents->count();
        } else if ($type == 'GOLD') {
            // 6 dependentes
            $rest = 6 - $dependents->count();
        } else if($type == 'VIP') {
            // 7 dependentes
            $rest = 7 - $dependents->count();
        }
        return $rest;
    }

    public static function getAmountPlan(string $type)
    {
        $amount = 0;
        if ($type == 'LIGTH') {
            // 4 dependentes
            $amount = 526;
        } else if ($type == 'PLUS') {
            // 5 dependentes
            $amount = 960;
        } else if ($type == 'GOLD') {
            // 6 dependentes
            $amount = 1590;
        } else if($type == 'VIP') {
            // 7 dependentes
            $amount = 2490;
        }
        return $amount;
    }
}
