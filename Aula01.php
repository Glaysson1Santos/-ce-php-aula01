<!doctype html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      Aula 01 - PHP
    </title>
  </head>
  <body>
    <?php
      $a = 10;
      $b = 20;
    ?>
    <table border='1' align='center'>
      <caption>PHP - Aula 01</caption>
      <tr>
        <th>Operações</th>
        <th>Resultados</th>
      </tr>
      <tr>
        <td>A + B</td>
        <td><?php echo $a + $b; ?></td>
      </tr>
      <tr>
        <td>A - B</td>
        <td><?php echo $a - $b; ?></td>
      </tr>
      <tr>
        <td>A x B</td>
        <td><?php echo $a * $b; ?></td>
      </tr>
      <tr>
        <td>A / B</td>
        <td><?php echo $a / $b; ?></td>
      </tr>
      <tr>
        <td>B / A</td>
        <td><?php echo number_format($b / $a, 3, '.', ','); ?></td>
      </tr>
       </table>
  </body>
</html>
