<?php
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
        var_dump($this->field_no);
      }
    }
  }

  function reset()
  {
    $this->field_no == array(1, 2, 3, 4);
    var_dump($this->field_no);
  }
}