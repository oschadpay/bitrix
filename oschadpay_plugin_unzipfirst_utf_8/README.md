Модуль Oschadpay для 1C Bitrix.
=====

Данный 1 модуль подходит для версий Малый бизнес, Бизнес и Бизнес Веб-кластер.
--


#Инструкция по установке модуля оплаты Oschadpay под 1C Битрикс

Папку oschadpay.oschadpay нужно разместить в `{Корневой каталог сайта}/bitrix/modules/` установить нужную кодировку!

#После этого ативировать модуль(http://{your site}/bitrix/admin/partner_modules.php?lang=ru) и потом :

>1. Зайти в административную часть интернет магазина.

>2. Перейти на страницу "Платежные системы" ( "Магазин" -> "Настройки магазина" -> "Платежные системы" )

>3. Нажать на кнопку "Добавить платежную систему"

>4. Заполнить общие данные о платежной системе.

>5. Перейти на нужную вкладку ( "Физические лица" или "Юридические лица" ) и заполнить всю необходимую информацию

>6. Сделать платежную систему активной и нажать "Сохранить"


В настройках вашего мерчанта на Oschadpay необходимо указать ссылку возврата информации о статусе платежа на страницу `http://yoursite.com/bitrix/tools/oschadpay_result.php`