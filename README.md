# inttech-lab-2

Тема работы: Нереляционная СУБД MongoDB и хранение данных на стороне клиента

Цель работы : изучение методов для работы с нереляционной СУБД MongoDB в языке PHP. Знакомство с хранением данных на стороне клиента, используя WebStorage.

Вариант 5. Создать и заполнить БД товаров интернет–магазина (в одной коллекции). Для товара обязательно указывается название, цена товара, количество единиц на складе. Возможные поля - фирма-производитель, категория товара (процессоры, материнские платы и т.д.), отзывы (могут быть и более одного), состояние (новое или б/у) и т.д.

Предоставить пользователю возможность получения следующей информации:

* перечень производителей, с которыми работает магазин ([1_1.php](https://github.com/linafv/inttech-lab-1/blob/master/1_1.php));
* товары, отсутствующие на складе (т.е. вообще они есть, но сейчас количество 0) ([1_2.php](https://github.com/linafv/inttech-lab-1/blob/master/1_2.php));
* товары в выбранном ценовом диапазоне ([1_3.php](https://github.com/linafv/inttech-lab-1/blob/master/1_3.php)).

Также были озданы файлы для соединения с данной БД ([conn.php](https://github.com/linafv/inttech-lab-1/blob/master/conn.php)) и реализации отображения контента ([index.php](https://github.com/linafv/inttech-lab-1/blob/master/index.php)).

Как результат:

![Скриншот итогового контента](https://github.com/linafv/inttech-lab-1/blob/master/Screenshot_1.png)

![Скриншот результата запроса за выбраным производителем](https://github.com/linafv/inttech-lab-1/blob/master/Screenshot_2.png)

![Скриншот результата запроса за выбраной котигорией](https://github.com/linafv/inttech-lab-1/blob/master/Screenshot_3.png)

![Скриншот результата запроса за выбраным ценовом деопозоном](https://github.com/linafv/inttech-lab-1/blob/master/Screenshot_4.png)
