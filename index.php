<!DOCTYPE HTML>
<html>

<head>
    <title>Lab2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src = "localStorage.js">
    </script>
</head>

<body>
    <p>
    <h3>Фоменко Лина. Вариант №5. Лабораторная №2</h3>
    <b>Вариант 5.</b> Создать и заполнить БД товаров интернет–магазина
    (в одной коллекции). Для товара обязательно указывается название,
    цена товара, количество единиц на складе. Возможные поля - фирма-производителя,
    категория товара (процессоры, материнские платы и т.д.), отзывы (могут быть и более одного),
    состояние (новое или б/у) и т.д.
    </p>
    <p>Предоставить пользователю возможность получения следующей информации:</p>
    <ul>
        <li>перечень производителей, с которыми работает магазин;</li>
        <li>товары, отсутствующие на складе (т.е. вообще они есть, но сейчас количество 0);</li>
        <li>товары в выбранном ценовом диапазоне.</li>
    </ul>

    <form method="get" action="2.1.php">
        <p><b>Производители, с которыми работает магазин </b><select name="shop" id="shop" onchange="getCollections()">
            <?php
                include 'connection.php';
                    echo "<option>";
                    print("shop");
                    echo "</option>";
                    echo "<option>";
                    print("col");
                    echo "</option>";
                    echo "<option>";
                    print("collumn");
                    echo "</option>";
                
                echo '</select>';
            ?>
        <input type="submit" value="Получить"></p>
    </form>

    <form method="get" action="2.2.php">
        <p><b>Товары, отсутствующие на складе</b>
            <select name="quantity" id="quantity" onchange="getQuantity()">
                <?php
                $quantity = $collection->distinct("quantity");
                foreach ($quantity as $document) {
                    echo "<option>";
                    print($document);
                    echo "</option>";
                }
                echo '</select>';
                ?>

                <input type="submit" value="Получить">

                </br> (для упрощения LocalStorage для этого задания было добавлено выбор количества айтемов, а не только дефолный 0)
        </p>
    </form>

    <form method="get" action="2.3.php">
        <p><b>По цене от <select name="min_price" id="min_price" onchange="getMinMax()">
                <?php
                $min_price = $collection->distinct("price");
                foreach ($min_price as $document) {
                    echo "<option>";
                    print($document);
                    echo "</option>";
                }
                echo '</select>';
                ?>
                до </b> 
                <select name="max_price" id="max_price" onchange="getMinMax()">
                    <?php
                    $max_price = $collection->distinct("price");
                    foreach ($max_price as $document) {
                        echo "<option>";
                        print($document);
                        echo "</option>";
                    }
                    
                    echo '</select>';
                    ?>

        <input type="submit" name="SubmButtonAuditorium" value="Ок"></p>
    </form>
    <div id = "res"></div>
</body>

</html>