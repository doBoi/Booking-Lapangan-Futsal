<?php
require_once __DIR__ . "/Helper/InputHelper.php";

use Helper\InputHelper;

class LapanganFutsal
{
  public $field_no = [];
  public function __construct($field_no = array(1, 2, 3, 4))
  {
    $this->field_no = $field_no;
  }

  function bookings($field)
  {
    foreach ($this->field_no as $field_no) {
      if ($field_no == $field) {
        unset($this->field_no[$field_no - 1]);
        echo "Lapangan Yang Terpilih Adalah Lapangan " . $field . PHP_EOL;
      }
    }
  }

  function reset()
  {
    $this->field_no == array(1, 2, 3, 4);
  }
}
$lapfutsal = new LapanganFutsal;
while (true) {
  echo "MENU" . PHP_EOL;
  echo "1. Booking Lapangan" . PHP_EOL;
  echo "2. Reset Lapangan" . PHP_EOL;
  echo "x. Keluar" . PHP_EOL;

  $pilihan = InputHelper::input("Pilih Menu");

  if ($pilihan == 1) {
    $booking = InputHelper::input("Pilih Lapangan");
    $lapfutsal->bookings($booking);
  } else if ($pilihan == 2) {
    $lapfutsal->reset();
  } else {
    break;
  }
}