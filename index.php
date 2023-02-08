    <?php
    $a = 0;
    $b = 1;
    $bul1 = true;
    $bul2 = false;
    $c = -1;
    $d = "1";
    $null = null;
    $php = "php";
    ?>
<!-- Задание 1 -->
    <section">
        <table>
            <caption><h2> Задание 1 </h2></caption>
            <tr>
                <th class="stolb"> № п\п</th>
                <th class="stolb"> А</th>
                <th class="stolb"> В</th>
                <th class="stolb"> !А</th>
                <th class="stolb"> А||B</th>
                <th class="stolb"> A && B</th>
                <th class="stolb"> A xor B</th>
            </tr>
            <tr>
                <td class="stolb1">1.</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb1">2.</td>
                <td class="stolb1">0</td>
                <td class="stolb1">1</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$b) ?></td>
                <td class="stolb1"><?php var_dump($a && $b) ?></td>
                <td class="stolb1"><?php var_dump($a xor $b) ?></td>
            </tr>
            <tr>
                <td class="stolb1">3.</td>
                <td class="stolb1">1</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($b||$a) ?></td>
                <td class="stolb1"><?php var_dump($b && $a) ?></td>
                <td class="stolb1"><?php var_dump($b xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb1">4.</td>
                <td class="stolb1">1</td>
                <td class="stolb1">1</td>
                <td class="stolb1"><?php echo !$b ?></td>
                <td class="stolb1"><?php var_dump($b||$b) ?></td>
                <td class="stolb1"><?php var_dump($b && $b) ?></td>
                <td class="stolb1"><?php var_dump($b xor $b) ?></td>
            </tr>
        </table>
    </section>
<!-- Задание 2 -->
    <section">
    <!-- Гибкое -->
        <table>
            <caption><h2> Задание 2 Гибкое сравнение </h2></caption>
            <tr>
                <th class="stolb"></th>
                <th class="stolb">true</th>
                <th class="stolb">false</th>
                <th class="stolb">1</th>
                <th class="stolb">0</th>
                <th class="stolb">-1</th>
                <th class="stolb">"1"</th>
                <th class="stolb">null</th>
                <th class="stolb">"php"</th>
            </tr>
            <tr>
                <td class="stolb2">true</td>
                <td class="stolb1"><?php var_dump($bul1 == $bul1) ?></td>
                <td class="stolb1"><?php var_dump($bul1 == $bul2) ?></td>
                <td class="stolb1"><?php var_dump($bul1 == $b) ?></td>
                <td class="stolb1"><?php var_dump($bul1 == $a) ?></td>
                <td class="stolb1"><?php var_dump($bul1 == $c) ?></td>
                <td class="stolb1"><?php var_dump($bul1 == $d) ?></td>
                <td class="stolb1"><?php var_dump($bul1 == $null) ?></td>
                <td class="stolb1"><?php var_dump($bul1 == $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">false</td>
                <td class="stolb1"><?php var_dump($bul2 == $bul1) ?></td>
                <td class="stolb1"><?php var_dump($bul2 == $bul2) ?></td>
                <td class="stolb1"><?php var_dump($bul2 == $b) ?></td>
                <td class="stolb1"><?php var_dump($bul2 == $a) ?></td>
                <td class="stolb1"><?php var_dump($bul2 == $c) ?></td>
                <td class="stolb1"><?php var_dump($bul2 == $d) ?></td>
                <td class="stolb1"><?php var_dump($bul2 == $null) ?></td>
                <td class="stolb1"><?php var_dump($bul2 == $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">1</td>
                <td class="stolb1"><?php var_dump($b == $bul1) ?></td>
                <td class="stolb1"><?php var_dump($b == $bul2) ?></td>
                <td class="stolb1"><?php var_dump($b == $b) ?></td>
                <td class="stolb1"><?php var_dump($b == $a) ?></td>
                <td class="stolb1"><?php var_dump($b == $c) ?></td>
                <td class="stolb1"><?php var_dump($b == $d) ?></td>
                <td class="stolb1"><?php var_dump($b == $null) ?></td>
                <td class="stolb1"><?php var_dump($b == $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">0</td>
                <td class="stolb1"><?php var_dump($a == $bul1) ?></td>
                <td class="stolb1"><?php var_dump($a == $bul2) ?></td>
                <td class="stolb1"><?php var_dump($a == $b) ?></td>
                <td class="stolb1"><?php var_dump($a == $a) ?></td>
                <td class="stolb1"><?php var_dump($a == $c) ?></td>
                <td class="stolb1"><?php var_dump($a == $d) ?></td>
                <td class="stolb1"><?php var_dump($a == $null) ?></td>
                <td class="stolb1"><?php var_dump($a == $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">-1</td>
                <td class="stolb1"><?php var_dump($c == $bul1) ?></td>
                <td class="stolb1"><?php var_dump($c == $bul2) ?></td>
                <td class="stolb1"><?php var_dump($c == $b) ?></td>
                <td class="stolb1"><?php var_dump($c == $a) ?></td>
                <td class="stolb1"><?php var_dump($c == $c) ?></td>
                <td class="stolb1"><?php var_dump($c == $d) ?></td>
                <td class="stolb1"><?php var_dump($c == $null) ?></td>
                <td class="stolb1"><?php var_dump($c == $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">"1"</td>
                <td class="stolb1"><?php var_dump($d == $bul1) ?></td>
                <td class="stolb1"><?php var_dump($d == $bul2) ?></td>
                <td class="stolb1"><?php var_dump($d == $b) ?></td>
                <td class="stolb1"><?php var_dump($d == $a) ?></td>
                <td class="stolb1"><?php var_dump($d == $c) ?></td>
                <td class="stolb1"><?php var_dump($d == $d) ?></td>
                <td class="stolb1"><?php var_dump($d == $null) ?></td>
                <td class="stolb1"><?php var_dump($d == $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">null</td>
                <td class="stolb1"><?php var_dump($null == $bul1) ?></td>
                <td class="stolb1"><?php var_dump($null == $bul2) ?></td>
                <td class="stolb1"><?php var_dump($null == $b) ?></td>
                <td class="stolb1"><?php var_dump($null == $a) ?></td>
                <td class="stolb1"><?php var_dump($null == $c) ?></td>
                <td class="stolb1"><?php var_dump($null == $d) ?></td>
                <td class="stolb1"><?php var_dump($null == $null) ?></td>
                <td class="stolb1"><?php var_dump($null == $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">"php"</td>
                <td class="stolb1"><?php var_dump($php == $bul1) ?></td>
                <td class="stolb1"><?php var_dump($php == $bul2) ?></td>
                <td class="stolb1"><?php var_dump($php == $b) ?></td>
                <td class="stolb1"><?php var_dump($php == $a) ?></td>
                <td class="stolb1"><?php var_dump($php == $c) ?></td>
                <td class="stolb1"><?php var_dump($php == $d) ?></td>
                <td class="stolb1"><?php var_dump($php == $null) ?></td>
                <td class="stolb1"><?php var_dump($php == $php) ?></td>
            </tr>
        </table>
<!-- Жесткое -->
        <table>
            <caption><h2> Задание 2 Жесткое сравнение </h2></caption>
            <tr>
                <th class="stolb"></th>
                <th class="stolb">true</th>
                <th class="stolb">false</th>
                <th class="stolb">1</th>
                <th class="stolb">0</th>
                <th class="stolb">-1</th>
                <th class="stolb">"1"</th>
                <th class="stolb">null</th>
                <th class="stolb">"php"</th>
            </tr>
            <tr>
                <td class="stolb2">true</td>
                <td class="stolb1"><?php var_dump($bul1 === $bul1) ?></td>
                <td class="stolb1"><?php var_dump($bul1 === $bul2) ?></td>
                <td class="stolb1"><?php var_dump($bul1 === $b) ?></td>
                <td class="stolb1"><?php var_dump($bul1 === $a) ?></td>
                <td class="stolb1"><?php var_dump($bul1 === $c) ?></td>
                <td class="stolb1"><?php var_dump($bul1 === $d) ?></td>
                <td class="stolb1"><?php var_dump($bul1 === $null) ?></td>
                <td class="stolb1"><?php var_dump($bul1 === $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">false</td>
                <td class="stolb1"><?php var_dump($bul2 === $bul1) ?></td>
                <td class="stolb1"><?php var_dump($bul2 === $bul2) ?></td>
                <td class="stolb1"><?php var_dump($bul2 === $b) ?></td>
                <td class="stolb1"><?php var_dump($bul2 === $a) ?></td>
                <td class="stolb1"><?php var_dump($bul2 === $c) ?></td>
                <td class="stolb1"><?php var_dump($bul2 === $d) ?></td>
                <td class="stolb1"><?php var_dump($bul2 === $null) ?></td>
                <td class="stolb1"><?php var_dump($bul2 === $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">1</td>
                <td class="stolb1"><?php var_dump($b === $bul1) ?></td>
                <td class="stolb1"><?php var_dump($b === $bul2) ?></td>
                <td class="stolb1"><?php var_dump($b === $b) ?></td>
                <td class="stolb1"><?php var_dump($b === $a) ?></td>
                <td class="stolb1"><?php var_dump($b === $c) ?></td>
                <td class="stolb1"><?php var_dump($b === $d) ?></td>
                <td class="stolb1"><?php var_dump($b === $null) ?></td>
                <td class="stolb1"><?php var_dump($b === $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">0</td>
                <td class="stolb1"><?php var_dump($a === $bul1) ?></td>
                <td class="stolb1"><?php var_dump($a === $bul2) ?></td>
                <td class="stolb1"><?php var_dump($a === $b) ?></td>
                <td class="stolb1"><?php var_dump($a === $a) ?></td>
                <td class="stolb1"><?php var_dump($a === $c) ?></td>
                <td class="stolb1"><?php var_dump($a === $d) ?></td>
                <td class="stolb1"><?php var_dump($a === $null) ?></td>
                <td class="stolb1"><?php var_dump($a === $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">-1</td>
                <td class="stolb1"><?php var_dump($c === $bul1) ?></td>
                <td class="stolb1"><?php var_dump($c === $bul2) ?></td>
                <td class="stolb1"><?php var_dump($c === $b) ?></td>
                <td class="stolb1"><?php var_dump($c === $a) ?></td>
                <td class="stolb1"><?php var_dump($c === $c) ?></td>
                <td class="stolb1"><?php var_dump($c === $d) ?></td>
                <td class="stolb1"><?php var_dump($c === $null) ?></td>
                <td class="stolb1"><?php var_dump($c === $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">"1"</td>
                <td class="stolb1"><?php var_dump($d === $bul1) ?></td>
                <td class="stolb1"><?php var_dump($d === $bul2) ?></td>
                <td class="stolb1"><?php var_dump($d === $b) ?></td>
                <td class="stolb1"><?php var_dump($d === $a) ?></td>
                <td class="stolb1"><?php var_dump($d === $c) ?></td>
                <td class="stolb1"><?php var_dump($d === $d) ?></td>
                <td class="stolb1"><?php var_dump($d === $null) ?></td>
                <td class="stolb1"><?php var_dump($d === $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">null</td>
                <td class="stolb1"><?php var_dump($null === $bul1) ?></td>
                <td class="stolb1"><?php var_dump($null === $bul2) ?></td>
                <td class="stolb1"><?php var_dump($null === $b) ?></td>
                <td class="stolb1"><?php var_dump($null === $a) ?></td>
                <td class="stolb1"><?php var_dump($null === $c) ?></td>
                <td class="stolb1"><?php var_dump($null === $d) ?></td>
                <td class="stolb1"><?php var_dump($null === $null) ?></td>
                <td class="stolb1"><?php var_dump($null === $php) ?></td>
            </tr>
            <tr>
                <td class="stolb2">"php"</td>
                <td class="stolb1"><?php var_dump($php === $bul1) ?></td>
                <td class="stolb1"><?php var_dump($php === $bul2) ?></td>
                <td class="stolb1"><?php var_dump($php === $b) ?></td>
                <td class="stolb1"><?php var_dump($php === $a) ?></td>
                <td class="stolb1"><?php var_dump($php === $c) ?></td>
                <td class="stolb1"><?php var_dump($php === $d) ?></td>
                <td class="stolb1"><?php var_dump($php === $null) ?></td>
                <td class="stolb1"><?php var_dump($php === $php) ?></td>
            </tr>
        </table>
    </section>
<!-- стили -->
    <style>
        table {
    text-align: center;
    width: auto; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   td, th {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
   .stolb, .stolb2 {
    width: 25px;
    background: #b0e0e6; /* Цвет фона */
   }
    </style>