<?php

function formatToReal($value, $decimals = 2)
{
  $value = number_format((float)$value, $decimals, ',', '.');
  return $value;
}

function formatToDouble($value, $decimals = 2)
{
  $value = number_format((float)$value, $decimals, '.', ',');
  return $value;
}

function success(string $msg)
{
  return [
    'type' => 'success',
    'msg' => $msg
  ];
}

function error(string $msg)
{
  return [
    'type' => 'danger',
    'msg' => $msg
  ];
}

function warning(string $msg)
{
  return [
    'type' => 'warning',
    'msg' => $msg
  ];
}

function alert(string $msg)
{
  return [
    'type' => 'info',
    'msg' => $msg
  ];
}

function firstDayOfMonthCurrent()
{
  $date = new DateTime();
  $date->setDate(date('y'),date('m'),1);
  $firstDay = date_format($date, 'M d');

  return $firstDay; 
}

function lastDayOfMonthCurrent()
{
  $today = new DateTime();
  $lastday = date_format($today, 'M t');

  return $lastday;
}