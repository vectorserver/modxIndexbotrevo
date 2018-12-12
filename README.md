# modxIndexbotrevo
Показ информации определенному боту

Сниппет модификатор для **MODX REVO**, позволяет показывать содержимое плейсхолдера или тв параметра определенному боту, yandexbot,googlebot,bingbot и другие

Параметры сниппета:
```
$options - название бота для которого выводит информацию
$debug - режим отладки
```

Пример 

```[[*pagetitle:indexbot=`googlebot`]]```
или
```[[indexbot? &input=`Заголовок <b>[[*pagetitle]]</b> виден только для <b>googlebot</b>` &options=`googlebot` &debug=`1`]]```
