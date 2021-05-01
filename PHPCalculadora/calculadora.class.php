<?php
  class Calculator
  {
    private $value1;
    private $value2;

    public function Calculator ()
    {}

    public function getValue1 ()
    {
      return $this->value1;
    }

    public function setValue1 ($value1)
    {
      return $this->value1 = $value1;
    }

    public function getValue2 ()
    {
      return $this->value2;
    }

    public function setValue2 ($value2)
    {
      return $this->value2 = $value2;
    }

    public function addition ()
    {
      return $this->value1 + $this->value2;
    }

    public function subtraction ()
    {
      return $this->value1 - $this->value2;
    }

    public function multiplication ()
    {
      return $this->value1 * $this->value2;
    }

    public function division ()
    {
      return $this->value1 / $this->value2;
    }
  }
 ?>
