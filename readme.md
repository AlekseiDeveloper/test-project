## О том как запустить

Настройка окружения


1)Необходимо зайти в .env file  который находится в корне проекта и
 задать настройки для связи с базой (настройки и база могут быть любыми).

2)После того как подключили базу заходим в consol можно которая есть в php OpenServer и 
 открываем ее с указание пути на вашь проест, нужно написать такую команду: cd domains\project и нажать enter.

3)Затем создаем все миграции для нашей базы, команда для создания таблиц: php artisan migrate;

4)Чтобы заполнить таблицы данными нужно воспользоваться этой командой: php artisan db:seed

5)Заходим на сайт что бы зайти с правами admin вам понадобится, login: admin@mail.ru, password: 123123123, 
 или можете зарегтстрировать нового пользователя.
