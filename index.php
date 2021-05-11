<?php

if (!empty($_POST))
{
    $commande = array('salade'=>$_POST['salade'],'tomate'=>$_POST['tomate'],'oignon'=>$_POST['oignon']);
    $options = json_encode($commande);
    $message = 'Sandwich : ';
    $options = json_decode($options);

    foreach ($options as $option)
    {
      if ($option) $message .= ' '.$option.',';
    }
  } else { echo "choisissez une option"; }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandwich</title>
</head>
<body>
  <form method="post" name="menu">
    <h1>Faites votre sandwich</h1>
    <span><input type="checkbox" name="salade" value="salade"/> salade</span>
    <span><input type="checkbox" name="tomate" value="tomate"/> tomate</span>
    <span><input type="checkbox" name="oignon" value="oignon"/> oignon</span>
    <br/><input type="submit" value="Commander"/>
    <br>
    <?php if (isset($message)) echo "$message"; ?>
  </form>


</body>

</html>
