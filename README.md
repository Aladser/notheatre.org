# notheatre.org
### Театр не театра

Сайт-визитка, сделанный на базе MVC-фреймворка без использования других фреймворков.

Оформлены общая шапка и подвал сайта для всех страниц

Сайт имеет 5 страниц:
* главная страница
* ближайший спектакль;
* афиша;
* кассы;
* контакты

Перенаправление страниц сделано на основе переменной $_SERVER['REDIRECT_URL']: url имеют вид *notheatre.org/название страницы*. это выглядит лаконичней, чем использование $_GET-параметра

### PHP GD
![Подключение php-gd](gd.png)
