    <?php
    $a = 0;
    $b = 1;
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
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">false</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">1</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">-1</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">"1"</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">null</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">"php"</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
        </table>
<!-- Жесткое -->
        <table>
            <caption><h2> Задание 2 Жесткое сравнение </h2></caption>
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
                <td class="stolb2">1.</td>
                <td class="stolb1">0</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$a) ?></td>
                <td class="stolb1"><?php var_dump($a && $a) ?></td>
                <td class="stolb1"><?php var_dump($a xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">2.</td>
                <td class="stolb1">0</td>
                <td class="stolb1">1</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($a||$b) ?></td>
                <td class="stolb1"><?php var_dump($a && $b) ?></td>
                <td class="stolb1"><?php var_dump($a xor $b) ?></td>
            </tr>
            <tr>
                <td class="stolb2">3.</td>
                <td class="stolb1">1</td>
                <td class="stolb1">0</td>
                <td class="stolb1"><?php echo !$a ?></td>
                <td class="stolb1"><?php var_dump($b||$a) ?></td>
                <td class="stolb1"><?php var_dump($b && $a) ?></td>
                <td class="stolb1"><?php var_dump($b xor $a) ?></td>
            </tr>
            <tr>
                <td class="stolb2">4.</td>
                <td class="stolb1">1</td>
                <td class="stolb1">1</td>
                <td class="stolb1"><?php echo !$b ?></td>
                <td class="stolb1"><?php var_dump($b||$b) ?></td>
                <td class="stolb1"><?php var_dump($b && $b) ?></td>
                <td class="stolb1"><?php var_dump($b xor $b) ?></td>
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