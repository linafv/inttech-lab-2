# inttech-lab-2

Тема работы: Нереляционная СУБД MongoDB и хранение данных на стороне клиента

Цель работы : изучение методов для работы с нереляционной СУБД MongoDB в языке PHP. Знакомство с хранением данных на стороне клиента, используя WebStorage.

Вариант 5. Создать и заполнить БД товаров интернет–магазина (в одной коллекции). Для товара обязательно указывается название, цена товара, количество единиц на складе. Возможные поля - фирма-производитель, категория товара (процессоры, материнские платы и т.д.), отзывы (могут быть и более одного), состояние (новое или б/у) и т.д.

Предоставить пользователю возможность получения следующей информации:

* перечень производителей, с которыми работает магазин ([2.1.php](https://github.com/linafv/inttech-lab-2/blob/master/2.1.php));
* товары, отсутствующие на складе ([2.2.php](https://github.com/linafv/inttech-lab-2/blob/master/2.2.php));
* товары в выбранном ценовом диапазоне ([2.3.php](https://github.com/linafv/inttech-lab-2/blob/master/2.3.php)).

Также были озданы файлы для соединения с данной БД ([connection.php](https://github.com/linafv/inttech-lab-2/blob/master/connection.php)), реализации отображения контента ([index.php](https://github.com/linafv/inttech-lab-2/blob/master/index.php)), а также файл  необходимыми onchange функциями ([localStorage.js](https://github.com/linafv/inttech-lab-2/blob/master/localStorage.js)).


Как результат:

![Скриншот просмотра коллекций](https://github.com/linafv/inttech-lab-2/blob/master/Screenshot_1.png)

![Скриншот итоговового контента](https://github.com/linafv/inttech-lab-2/blob/master/Screenshot_2.png)

![Скриншот результата запроса с перечнем производителей, что работают с магазином](https://github.com/linafv/inttech-lab-2/blob/master/Screenshot_4.png)

![Скриншот результата запроса перечня товаров, что отсутствуют на складе магазина](https://github.com/linafv/inttech-lab-2/blob/master/Screenshot_10.png)

![Скриншот результата запроса за выбраным ценовом деопозоном](https://github.com/linafv/inttech-lab-2/blob/master/Screenshot_6.png)
