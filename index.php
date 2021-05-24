<?php

$account = "12345";

$pattern = "/^[_0-9a-z}{6,}$/";

function checkAccount($account, $pattern)
{
    if (preg_match($pattern, $account)){
        echo $account."hop le";
    }else{
        echo $account."khong hop le";
    }
}

checkAccount($account, $pattern);