<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица истинности логических операций</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <caption><h2>Таблица истинности PHP</h2></caption>
          <tr style="background-color: rgb(151, 151, 195);">
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
          </tr>
          <tr>
            <td class="ab2"><?php $a = 0; ?>0</td>
            <td class="ab2"><?php $b = 0; ?>0</td>
            <td><?php echo (int)(!$a); ?></td>
            <td><?php echo (int)($a || $b); ?></td>
            <td><?php echo (int)($a && $b); ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $a = 0; ?>0</td>
            <td class="ab2"><?php $b = 1; ?>1</td>
            <td><?php echo (int)(!$a); ?></td>
            <td><?php echo (int)($a || $b); ?></td>
            <td><?php echo (int)($a && $b); ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $a = 1; ?>1</td>
            <td class="ab2"><?php $b = 0; ?>0</td>
            <td><?php echo (int)(!$a); ?></td>
            <td><?php echo (int)($a || $b); ?></td>
            <td><?php echo (int)($a && $b); ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $a = 1; ?>1</td>
            <td class="ab2"><?php $b = 1; ?>1</td>
            <td><?php echo (int)(!$a); ?></td>
            <td><?php echo (int)($a || $b); ?></td>
            <td><?php echo (int)($a && $b); ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
          </tr>
        </table>
        <br>
        <br>
      <table>
        <caption><h2>Таблица <i>с гибким</i> сравнением</h2></caption>
          <tr style="background-color: rgb(151, 151, 195);">
            <th></th>
            <th><?php $a1 = true; ?>true</th>
            <th><?php $a2 = false; ?>false</th>
            <th><?php $a3 = 1; ?>1</th>
            <th><?php $a4 = 0; ?>0</th>
            <th><?php $a5 = -1; ?>-1</th>
            <th><?php $a6 = "1"; ?>"1"</th>
            <th><?php $a7 = null; ?>null</th>
            <th><?php $a8 = "php"; ?>"php"</th>
          </tr>
          <tr>
            <td class="ab2"><?php $b1 = true; ?>true</td>
            <td><?php echo (bool)($x = $a1 == $b1);?></td>
            <td><?php echo (bool)($a2 == $b1);?></td>
            <td><?php echo (bool)($a3 == $b1);?></td>
            <td><?php echo (bool)($a4 == $b1);?></td>
            <td><?php echo (bool)($a5 == $b1);?></td>
            <td><?php echo (bool)($a6 == $b1);?></td>
            <td><?php echo (bool)($a7 == $b1);?></td>
            <td><?php echo (bool)($a8 == $b1);?></td>
          </tr>
          <tr>
          <td class="ab2"><?php $b2 = false; ?>false</td>
            <td><?php echo (bool)($a1 == $b2);?></td>
            <td><?php echo (bool)($a2 == $b2);?></td>
            <td><?php echo (bool)($a3 == $b2);?></td>
            <td><?php echo (bool)($a4 == $b2);?></td>
            <td><?php echo (bool)($a5 == $b2);?></td>
            <td><?php echo (bool)($a6 == $b2);?></td>
            <td><?php echo (bool)($a7 == $b2);?></td>
            <td><?php echo (bool)($a8 == $b2);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b3 = 1; ?>1</td>
            <td><?php echo (bool)($a1 == $b3);?></td>
            <td><?php echo (bool)($a2 == $b3);?></td>
            <td><?php echo (bool)($a3 == $b3);?></td>
            <td><?php echo (bool)($a4 == $b3);?></td>
            <td><?php echo (bool)($a5 == $b3);?></td>
            <td><?php echo (bool)($a6 == $b3);?></td>
            <td><?php echo (bool)($a7 == $b3);?></td>
            <td><?php echo (bool)($a8 == $b3);?></td>
          </tr>
          <tr>
          <td class="ab2"><?php $b4 = 0; ?>0</td>
            <td><?php echo (bool)($a1 == $b4);?></td>
            <td><?php echo (bool)($a2 == $b4);?></td>
            <td><?php echo (bool)($a3 == $b4);?></td>
            <td><?php echo (bool)($a4 == $b4);?></td>
            <td><?php echo (bool)($a5 == $b4);?></td>
            <td><?php echo (bool)($a6 == $b4);?></td>
            <td><?php echo (bool)($a7 == $b4);?></td>
            <td><?php echo (bool)($a8 == $b4);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b5 = -1; ?>-1</td>
            <td><?php echo (bool)($a1 == $b5);?></td>
            <td><?php echo (bool)($a2 == $b5);?></td>
            <td><?php echo (bool)($a3 == $b5);?></td>
            <td><?php echo (bool)($a4 == $b5);?></td>
            <td><?php echo (bool)($a5 == $b5);?></td>
            <td><?php echo (bool)($a6 == $b5);?></td>
            <td><?php echo (bool)($a7 == $b5);?></td>
            <td><?php echo (bool)($a8 == $b5);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b6 = "1"; ?>"1"</td>
            <td><?php echo (bool)($a1 == $b6);?></td>
            <td><?php echo (bool)($a2 == $b6);?></td>
            <td><?php echo (bool)($a3 == $b6);?></td>
            <td><?php echo (bool)($a4 == $b6);?></td>
            <td><?php echo (bool)($a5 == $b6);?></td>
            <td><?php echo (bool)($a6 == $b6);?></td>
            <td><?php echo (bool)($a7 == $b6);?></td>
            <td><?php echo (bool)($a8 == $b6);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b7 = null; ?>null</td>
            <td><?php echo (bool)($a1 == $b7);?></td>
            <td><?php echo (bool)($a2 == $b7);?></td>
            <td><?php echo (bool)($a3 == $b7);?></td>
            <td><?php echo (bool)($a4 == $b7);?></td>
            <td><?php echo (bool)($a5 == $b7);?></td>
            <td><?php echo (bool)($a6 == $b7);?></td>
            <td><?php echo (bool)($a7 == $b7);?></td>
            <td><?php echo (bool)($a8 == $b7);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b8 = "php"; ?>"php"</td>
            <td><?php echo (bool)($a1 == $b8);?></td>
            <td><?php echo (bool)($a2 == $b8);?></td>
            <td><?php echo (bool)($a3 == $b8);?></td>
            <td><?php echo (bool)($a4 == $b8);?></td>
            <td><?php echo (bool)($a5 == $b8);?></td>
            <td><?php echo (bool)($a6 == $b8);?></td>
            <td><?php echo (bool)($a7 == $b8);?></td>
            <td><?php echo (bool)($a8 == $b8);?></td>
          </tr>
        </table>
        <br>
        <br>
      <table>
        <caption><h2>Таблица <i>с жестким</i> сравнением</h2></caption>
          <tr style="background-color: rgb(151, 151, 195);">
            <th></th>
            <th><?php $a1 = true; ?>true</th>
            <th><?php $a2 = false; ?>false</th>
            <th><?php $a3 = 1; ?>1</th>
            <th><?php $a4 = 0; ?>0</th>
            <th><?php $a5 = -1; ?>-1</th>
            <th><?php $a6 = "1"; ?>"1"</th>
            <th><?php $a7 = null; ?>null</th>
            <th><?php $a8 = "php"; ?>"php"</th>
          </tr>
          <tr>
            <td class="ab2"><?php $b1 = true; ?>true</td>
            <td><?php echo (bool)($a1 === $b1);?></td>
            <td><?php echo (bool)($a2 === $b1);?></td>
            <td><?php echo (bool)($a3 === $b1);?></td>
            <td><?php echo (bool)($a4 === $b1);?></td>
            <td><?php echo (bool)($a5 === $b1);?></td>
            <td><?php echo (bool)($a6 === $b1);?></td>
            <td><?php echo (bool)($a7 === $b1);?></td>
            <td><?php echo (bool)($a8 === $b1);?></td>
          </tr>
          <tr>
          <td class="ab2"><?php $b2 = false; ?>false</td>
            <td><?php echo (bool)($a1 === $b2);?></td>
            <td><?php echo (bool)($a2 === $b2);?></td>
            <td><?php echo (bool)($a3 === $b2);?></td>
            <td><?php echo (bool)($a4 === $b2);?></td>
            <td><?php echo (bool)($a5 === $b2);?></td>
            <td><?php echo (bool)($a6 === $b2);?></td>
            <td><?php echo (bool)($a7 === $b2);?></td>
            <td><?php echo (bool)($a8 === $b2);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b3 = 1; ?>1</td>
            <td><?php echo (bool)($a1 === $b3);?></td>
            <td><?php echo (bool)($a2 === $b3);?></td>
            <td><?php echo (bool)($a3 === $b3);?></td>
            <td><?php echo (bool)($a4 ===$b3);?></td>
            <td><?php echo (bool)($a5 === $b3);?></td>
            <td><?php echo (bool)($a6 === $b3);?></td>
            <td><?php echo (bool)($a7 === $b3);?></td>
            <td><?php echo (bool)($a8 === $b3);?></td>
          </tr>
          <tr>
          <td class="ab2"><?php $b4 = 0; ?>0</td>
            <td><?php echo (bool)($a1 === $b4);?></td>
            <td><?php echo (bool)($a2 === $b4);?></td>
            <td><?php echo (bool)($a3 === $b4);?></td>
            <td><?php echo (bool)($a4 === $b4);?></td>
            <td><?php echo (bool)($a5 === $b4);?></td>
            <td><?php echo (bool)($a6 === $b4);?></td>
            <td><?php echo (bool)($a7 === $b4);?></td>
            <td><?php echo (bool)($a8 === $b4);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b5 = -1; ?>-1</td>
            <td><?php echo (bool)($a1 === $b5);?></td>
            <td><?php echo (bool)($a2 === $b5);?></td>
            <td><?php echo (bool)($a3 === $b5);?></td>
            <td><?php echo (bool)($a4 === $b5);?></td>
            <td><?php echo (bool)($a5 === $b5);?></td>
            <td><?php echo (bool)($a6 === $b5);?></td>
            <td><?php echo (bool)($a7 === $b5);?></td>
            <td><?php echo (bool)($a8 === $b5);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b6 = "1"; ?>"1"</td>
            <td><?php echo (bool)($a1 === $b6);?></td>
            <td><?php echo (bool)($a2 === $b6);?></td>
            <td><?php echo (bool)($a3 === $b6);?></td>
            <td><?php echo (bool)($a4 === $b6);?></td>
            <td><?php echo (bool)($a5 === $b6);?></td>
            <td><?php echo (bool)($a6 === $b6);?></td>
            <td><?php echo (bool)($a7 === $b6);?></td>
            <td><?php echo (bool)($a8 === $b6);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b7 = null; ?>null</td>
            <td><?php echo (bool)($a1 === $b7);?></td>
            <td><?php echo (bool)($a3 === $b7);?></td>
            <td><?php echo (bool)($a4 === $b7);?></td>
            <td><?php echo (bool)($a5 === $b7);?></td>
            <td><?php echo (bool)($a6 === $b7);?></td>
            <td><?php echo (bool)($a7 === $b7);?></td>
            <td><?php echo (bool)($a8 === $b7);?></td>
          </tr>
          <tr>
            <td class="ab2"><?php $b8 = "php"; ?>"php"</td>
            <td><?php echo (bool)($a1 === $b8);?></td>
            <td><?php echo (bool)($a2 === $b8);?></td>
            <td><?php echo (bool)($a3 === $b8);?></td>
            <td><?php echo (bool)($a4 === $b8);?></td>
            <td><?php echo (bool)($a5 === $b8);?></td>
            <td><?php echo (bool)($a6 === $b8);?></td>
            <td><?php echo (bool)($a7 === $b8);?></td>
            <td><?php echo (bool)($a8 === $b8);?></td>
          </tr>
        </table>
</body>
</html>