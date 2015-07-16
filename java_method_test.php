<?php

  import java.util.Date;
  import java.util.DateFormat;

  $a = new Date();

  echo $a->getTime();    # calls getTime()

  echo "<br>";

  //$string = DateFormat.getDateInstance().format($a); echo $string;
  echo $a->toString();
?>
