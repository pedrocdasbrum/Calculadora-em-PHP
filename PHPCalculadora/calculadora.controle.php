<?php
  include "calculadora.class.php";

  $c = new Calculator;

  $c->setValue1(100);
  $c->setValue2(5);

  echo "<br>Valor 1: ".$c->getValue1().'.';
  echo "<br>Valor 2: ".$c->getValue2().'.';
  echo "<br>Somando os valores: ".$c->addition().'.';
  echo "<br>Subtraindo os valores: ".$c->subtraction().'.';
  echo "<br>Multiplicando os valores: ".$c->multiplication().'.';
  echo "<br>Dividindo os valores: ".$c->division().'.';
 ?>
