<?php

    function centuryFromYear(int $year):int
    {
        return intval(ceil($year / 100));
    }

    var_dump(centuryFromYear(201));