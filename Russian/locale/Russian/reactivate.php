<?php
// Error messages
$locale['500'] = "Произошла ошибка";
$locale['501'] = "Ссылка для повторной активации, по которой Вы перешли, больше не действительна.<br /><br />
Обратитесь к администратору сайта Свяжитесь с администратором сайта по Е-майлу: <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a>, если вы хотите запросить ручную повторную активацию.";
$locale['502'] = "Ссылка для повторной активации, по которой Вы перешли, неверная!<br /><br />
Свяжитесь с администратором сайта по Е-майлу: <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a>, если вы хотите запросить ручную повторную активацию.";
$locale['503'] = "Ссылка для повторной активации, которую Вы открыли, не активировала Вашу учётную запись.<br />
Возможно, ваша учетная запись уже активирована, в таком случае вы можете войти на сайт <a href='".$settings['siteurl']."login.php'>здесь</a>.<br /><br />
Если Вы не смогли войти, свяжитесь с администратором сайта по Е-майлу: <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a>, если вы хотите запросить ручную повторную активацию.";
// Send confirmation mail
$locale['504'] = "Учётная запись повторно активирована на сайте «[SITENAME]»";
$locale['505'] = "Здравствуйте [USER_NAME]!\n
Ваша учётная запись на сайте ".$settings['sitename']." Ваша учётная запись на сайте «[SITENAME]» была повторно активирована. Надеемся видеть Вас на сайте чаще.\n\n
С уважением,\n\n
".$settings['siteusername'];
$locale['506'] = "Повторная активация выполнена пользователем.";
