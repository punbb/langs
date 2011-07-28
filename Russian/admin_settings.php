<?php

// Russian language pack [PunBB.ru community] 1.4.0

$lang_admin_settings = array(

'Settings updated'				=>	'Настройки обновлены.',

// Setup section
'Setup personal'				=>	'Персональные настройки',
'Setup personal legend'			=>	'Инсталляция PunBB',
'Board description label'		=>	'Описание форума',
'Board title label'				=>	'Название форума',
'Default style label'			=>	'Стиль по умолчанию',
'Setup local'					=>	'Настройка локализации',
'Setup local legend'			=>	'Настройка локализации для форума',
'Default timezone label'		=>	'Часовой пояс',
'DST label'						=>	'Использовать летнее время (сдвиг на 1 час вперёд относительно времени, принятого в данном часовом поясе).',
'Default language label'		=>	'Основной язык',
'Default language help'			=>	'(Если языковой пакет удалён, необходимо обновить данную настройку)',
'Time format label'				=>	'Формат времени',
'Date format label'				=>	'Формат даты',
'Current format'				=>	'[ Текущий формат: %s ] %s',
'External format help'			=>	'<a class="exthelp" href="http://www.php.net/manual/en/function.date.php">Узнать подробнее</a> о форматировании.',
'Setup timeouts'				=>	'Параметры временных задержек',
'Setup timeouts legend'			=>	'Временные задержки',
'Visit timeout label'			=>	'Таймаут посещения',
'Visit timeout help'			=>	'Количество секунд с момента выхода пользователем',
'Online timeout label'			=>	'Таймаут активности',
'Online timeout help'			=>	'Количество секунд до изменения статуса нахождения пользователя на форуме',
'Redirect time label'			=>	'Ожидание переадресации',
'Redirect time help'			=>	'Если установить 0 секунд, страница переадресации не будет выводиться',
'Setup pagination'				=>	'Настройки отображения количества тем, сообщений и просмотров по умолчанию',
'Setup pagination legend'		=>	'Настройки отображения',
'Topics per page label'			=>	'Тем на странице',
'Posts per page label'			=>	'Сообщений на странице',
'Topic review label'			=>	'На странице ответа',
'Topic review help'				=>	'Новые первыми. 0 — отключить.',
'Setup reports'					=>	'Метод получения уведомлений об изменениях в сообщениях и темах',
'Setup reports legend'			=>	'Настройка уведомления',
'Reporting method'				=>	'Метод уведомления',
'Report internal label'			=>	'По внутренней системе уведомлений.',
'Report both label'				=>	'По внутренней системе уведомлений и используя e-mail по списку рассылки.',
'Report email label'			=>	'Используя email по списку рассылки.',
'Setup URL'						=>	'URL-схема (<abbr title="Search Engine Friendly">SEF</abbr> URLs) для страниц',
'Setup URL legend'				=>	'URL-схема',
'URL scheme info'				=>	'<strong>ВНИМАНИЕ!</strong> Если выбрать схему, отличную от <strong>Default</strong>, то необходимо скопировать/переименовать файл <em>.htaccess.dist</em> в <em>.htaccess</em> в корне форума. Сервер, на котором установлен форум, должен быть сконфигурирован с поддержкой mod_rewrite и должен разрешать использование файлов <em>.htaccess</em>. Если используется веб-сервер, отличный от Apache, пожалуйста, обратитесь к документации этого сервера.',
'URL scheme label'				=>	'URL-схема',
'URL scheme help'				=>	'Изменяйте настройки в том случае, если вы понимаете смысл приведенной выше информации.',
'Setup links'					=>	'Дополнительные ссылки в главном меню',
'Setup links info'				=>	'Форма ввода HTML-кода гиперссылок. В главное меню может быть добавлено любое количество пунктов. Формат записи добавления новых пунктов такой: X = &lt;a href="URL"&gt;ССЫЛКА&lt;/a&gt; где X — позиция, на которую ссылка должна быть помещена (например, 0 вставит новый пункт в самом начале, а 2 вставит новый пункт после пункта «Пользователи»). Каждый новый пункт пишется с новой строки.',
'Setup links legend'			=>	'Элементы меню',
'Enter links label'				=>	'Дополнительные ссылки',
'Error no board title'			=>	'Необходимо ввести название форума.',
'Error timeout value'			=>	'Значение параметра «Таймаут активности» должно быть меньше значения параметра «Таймаут посещения».',

// Features section
'Features general'				=>	'Основные настройки функционала PunBB',
'Features general legend'		=>	'Настройки функционала',
'Searching'						=>	'Поиск',
'Search all label'				=>	'Разрешить пользователям поиск по всем форумам одновременно. Отключите функцию, если сервер сильно загружен.',
'User ranks'					=>	'Ранги',
'User ranks label'				=>	'Включить пользовательские ранги, основанные на количестве сообщений.',
'Censor words'					=>	'Цензура',
'Censor words label'			=>	'Включить функцию запрета нежелательных слов.',
'Quick jump'					=>	'Быстрый переход',
'Quick jump label'				=>	'Включить выпадающий список быстрого перехода (прыжка к форуму).',
'Show version'					=>	'Показывать версию',
'Show version label'			=>	'Показывать версию PunBB внизу страницы.',
'Show moderators'				=>	'Показывать модераторов',
'Show moderators label'			=>	'Показывать модераторов на главной странице.',
'Online list'					=>	'Список активности',
'Users online label'			=>	'Отображать список гостей и зарегистрированных пользователей, находящихся на форуме.',
'Features posting'				=>	'Настройки функций в сообщениях и темах',
'Features posting legend'		=>	'Функции постинга',
'Quick post'					=>	'Быстрый ответ',
'Quick post label'				=>	'Добавить форму быстрого ответа внизу тем.',
'Subscriptions'					=>	'Подписки',
'Subscriptions label'			=>	'Разрешить пользователям подписку на получение уведомлений о новых ответах в теме по email.',
'Guest posting'					=>	'Сообщения от гостей',
'Guest posting label'			=>	'Гости должны указать email адрес при отправке сообщений.',
'User has posted'				=>	'Участие пользователя',
'User has posted label'			=>	'Отображать точку перед индикатором состояния темы, если пользователь отвечал в ней ранее. Отключите функцию, если нагрузка на сервера высока.',
'Topic views'					=>	'Просмотр тем',
'Topic views label'				=>	'Отображать количество просмотров тем. Отключите функцию, если сервер сильно загружен.',
'User post count'				=>	'Количество сообщений пользователя',
'User post count label'			=>	'Отображать количество сообщений пользователя в сообщениях, профиле и списке пользователей.',
'User info'						=>	'Информация пользователя',
'User info label'				=>	'Отображать место нахождения пользователя, дату регистрации, количество сообщений, адреса email и URL в сообщениях.',
'Features posts'				=>	'Обработка содержания тем и сообщений',
'Features posts legend'			=>	'Обработка содержания тем и сообщений',
'Post content group'			=>	'Опции сообщения',
'Allow BBCode label'			=>	'Разрешить BB-коды в сообщениях (рекомендуется).',
'Allow img label'				=>	'Разрешить BB-тег [img] в сообщениях.',
'Smilies in posts label'		=>	'Конвертировать текстовые смайлы в сообщениях в графические.',
'Make clickable links label'	=>	'Преобразовывать URL-адреса в гиперссылки в сообщениях.',
'Allow capitals group'			=>	'Заглавные буквы',
'All caps message label'		=>	'Разрешить все заглавные буквы в сообщениях.',
'All caps subject label'		=>	'Разрешить все заглавные буквы в заголовках.',
'Indent size label'				=>	'Отступ в теге [code]',
'Indent size help'				=>	'Величина отступа строки блока текста. Если установить 8, будет использован обычный отступ',
'Quote depth label'				=>	'Максимальная вложенность [quote]',
'Quote depth help'				=>	'Максимальный порядок включения тега [quote] внутрь других тегов [quote]. Содержимое вложенных тегов цитирования, порядок вложения которых больше указанного значения, будет отброшено',
'Features sigs'					=>	'Подпись пользователя и ее содержание',
'Features sigs legend'			=>	'Свойства подписи',
'Allow signatures'				=>	'Разрешить подписи',
'Allow signatures label'		=>	'Разрешать пользователям присоединять подписи к сообщениям.',
'Signature content group'		=>	'Содержимое подписи',
'BBCode in sigs label'			=>	'Разрешить BB-коды в подписях.',
'Img in sigs label'				=>	'Разрешить BB-тег [img] в подписях (не рекомендуется).',
'All caps sigs label'			=>	'Разрешить подписи, состоящие из заглавных букв.',
'Smilies in sigs label'			=>	'Конвертировать текстовые смайлы в графические в подписях.',
'Max sig length label'			=>	'Максимум символов',
'Max sig lines label'			=>	'Максимум строк',
'Features Avatars'				=>	'Аватары пользователей (параметры загрузки и размера)',
'Features Avatars legend'		=>	'Настройки аватара пользователя',
'Allow avatars'					=>	'Разрешить аватары',
'Allow avatars label'			=>	'Разрешить пользователям загружать  аватары для отображения в сообщениях.',
'Avatar directory label'		=>	'Каталог для загрузки',
'Avatar directory help'			=>	'Относительно корневого каталога форума PunBB. PHP должен иметь права записи на этот каталог.',
'Avatar Max width label'		=>	'Ширина аватара',
'Avatar Max width help'			=>	'Максимальная ширина в пикселях (рекомендуется значение 60).',
'Avatar Max height label'		=>	'Высота аватара',
'Avatar Max height help'		=>	'Максимальная высота в пикселях (рекомендуется значение 60).',
'Avatar Max size label'			=>	'Размер аватара',
'Avatar Max size help'			=>	'Максимальный размер в байтах (рекомендуется значение 10240).',
'Features update'				=>	'Автоматически проверять обновления',
'Features update info'			=>	'PunBB может периодически проверять наличие важных обновлений. Они могут быть предназначены для обновления версии форума или установки расширений, исправляющих ошибки и уязвимости. Когда обновления будут доступны, администратор форума получит уведомление.',
'Features update disabled info'	=>	'Невозможно автоматически проверить обновления. Для поддержки данной функции среда PHP в которой запущен PunBB, должна поддерживать <a href="http://www.php.net/manual/en/ref.curl.php">расширение cURL</a>, <a href="http://www.php.net/manual/en/function.fsockopen.php">функцию fsockopen() </a> или быть сконфигурирована с поддержкой <a href="http://www.php.net/manual/en/ref.filesystem.php#ini.allow-url-fopen">allow_url_fopen</a>.',
'Features update legend'		=>	'Автоматическое обновление',
'Update check'					=>	'Проверить обновления',
'Update check label'			=>	'Включить автоматическую проверку обновлений.',
'Check for versions'			=>	'Проверка новых версий',
'Auto check for versions'		=>	'Включить проверку новых версий расширений.',

'Features mask passwords'			=>	'Отображение паролей',
'Features mask passwords legend'	=>	'Отображение паролей',
'Features mask passwords info'		=>	'Если установлен, то PunBB будет скрывать все пароли в формах и запрашивать подтверждение. Если выключено, пароль будет скрыт и пользователи будут  видеть пароль только когда регистрируются или меняют его. Поле ввода пароля на форме авторизации всегда будет скрыто (независимо от этой опции).',
'Enable mask passwords'				=>	'Включить скрытие паролей',
'Enable mask passwords label'		=>	'Включить скрытие паролей в формах.',

'Features gzip'					=>	'Сжимать исходящие данные, используя gzip',
'Features gzip legend'			=>	'Сжатие данных',
'Features gzip info'			=>	'Если эта функция включена, PunBB будет передавать браузеру данные, сжатые gzip. Это сократит нагрузку на полосу пропускания данных, но немного увеличит нагрузку на процессор (CPU). Для этой функции нужно, чтобы PHP был сконфигурирован с поддержкой zlib (--with-zlib). Замечание: Если уже используется один из Apache-модулей: mod_gzip или mod_deflate, установленных для сжатия PHP сценариев, данную функцию стоит отключить.',
'Enable gzip'					=>	'Сжатие gzip',
'Enable gzip label'				=>	'Включить сжатие исходящих данных, используя gzip.',

// Announcements section
'Announcements head'			=>	'Отображение объявлений на форуме',
'Announcements legend'			=>	'Объявление',
'Enable announcement'			=>	'Включить объявление',
'Enable announcement label'		=>	'Включить вывод объявления.', 
'Announcement heading label'	=>	'Заголовок',
'Announcement message label'	=>	'Содержание',
'Announcement message help'		=>	'В объявлении можно использовать HTML. Текст объявления обрабатывается иначе, чем сообщения.',
'Announcement message default'	=>	'<p>Введите сюда содержание объявления.</p>',

// Registration section
'Registration new'				=>	'Новые регистрации',
'New reg info'					=>	'Можно использовать проверку всех новых регистраций. Когда проверка регистраций включена, пользователь получает на email сообщение со ссылкой активации. Он может воспользоваться ею для авторизации. Эта функция также требует от пользователя подтверждать адрес email, если он захочет его сменить после регистрации. Этот эффективный путь ограничения пустых регистраций позволяет быть уверенным, что у всех пользователей в профиле указан реальный адрес email.',
'Registration new legend'		=>	'Настройки новых регистраций',
'Allow new reg'					=>	'Новые регистрации',
'Allow new reg label'			=>	'Разрешить новые регистрации. Отключать только в особых случаях.',
'Verify reg'					=>	'Проверка регистрации',
'Verify reg label'				=>	'Подтверждать регистрации по email.',
'Reg e-mail group'				=>	'Email адрес регистрации',
'Allow banned label'			=>	'Разрешить регистрацию с адресом email, который находится в чёрном списке (заблокирован).',
'Allow dupe label'				=>	'Разрешить регистрацию с адресом email, который уже принадлежит другому пользователю.',
'Report new reg'				=>	'Оповещение по email',
'Report new reg label'			=>	'Оповещать пользователей из списка рассылки о регистрации новых пользователей.',
'E-mail setting group'			=>	'Базовые настройки email',
'Display e-mail label'			=>	'Показывать email адрес другим пользователям.',
'Allow form e-mail label'		=>	'Скрывать email адрес, но разрешить отправлять email сообщения через форум.',
'Disallow form e-mail label'	=>	'Скрывать email адрес и запретить отправлять email сообщения через форум.',
'Registration rules'			=>	'Правила форума (использование и оформление правил форума)',
'Registration rules info'		=>	'Можно обязать пользователей принимать правила форума при регистрации (напишите их в текстовом поле ниже). Правила всегда будут доступны для просмотра по ссылке из главного меню на каждой странице форума.',
'Registration rules legend'		=>	'Правила форума',
'Require rules'					=>	'Использовать правила',
'Require rules label'			=>	'Обязать пользователей принимать правила форума перед процедурой регистрации.',
'Compose rules label'			=>	'Текст правил',
'Compose rules help'			=>	'Можно использовать HTML в этом блоке.',
'Rules default'					=>	'Введите сюда ваши правила.',

// Email section
'E-mail addresses'				=>	'Email адреса и список рассылки',
'E-mail addresses legend'		=>	'Email адреса',
'Admin e-mail'					=>	'Email администратора',
'Webmaster e-mail label'		=>	'Email веб-мастера',
'Webmaster e-mail help'			=>	'Адрес отправителя, который будет использован форумом для рассылки',
'Mailing list label'			=>	'Список рассылки',
'Mailing list help'				=>	'Разделяйте адреса получателей сигналов и/или уведомлений о новых регистрациях запятой',
'E-mail server'					=>	'Настройки почтового сервера для отправки писем от форума',
'E-mail server legend'			=>	'Email сервер',
'E-mail server info'				=>	'В большинстве случаев PunBB без проблем отправляет email сообщения, используя внутренний почтовый сервис, в этом случае можно пропустить эти настройки. Также PunBB может быть сконфигурирован для использования внешнего почтового сервера. Введите адрес внешнего сервера и, если требуется, укажите номер порта SMTP-сервера, если используемый SMTP-сервер не может работать через стандартный 25 порт (например: mail.example.com:3580).',
'SMTP address label'			=>	'Адрес SMTP-сервера',
'SMTP address help'				=>	'Для внешних серверов. Оставьте пустым, чтобы использовать внутреннюю почтовую службу',
'SMTP username label'			=>	'Имя пользователя SMTP-сервера',
'SMTP username help'			=>	'Не требуется большинству SMTP-серверов',
'SMTP password label'			=>	'Пароль SMTP',
'SMTP password help'			=>	'Не требуется большинству SMTP-серверов',
'SMTP SSL'						=>	'Включить SSL для SMTP',
'SMTP SSL label'				=>	'Шифровать SMTP-соединение, используя SSL. Выбирайте, только если уверены, что используемая версия PHP поддерживает SSL и используемый SMTP-сервер требует этого.',
'Error invalid admin e-mail'		=>	'Введенный Email адрес администратора содержит ошибку.',
'Error invalid web e-mail'		=>	'Введенный Email адрес веб-мастера содержит ошибку.',

// Maintenance section
'Maintenance head'				=>	'Установка режима профилактики и оформление сообщения о применении данного режима',
'Maintenance mode info'			=>	'<strong>Важно!</strong> Форум будет доступен только администраторам. Данный режим следует использовать, если нужно закрыть форум для проведения каких-либо работ и изменения настроек.',
'Maintenance mode warn'			=>	'<strong>Внимание!</strong> НЕ ВЫХОДИТЕ, пока форум находится в режиме профилактики. Вы не сможете войти снова!',
'Maintenance legend'			=>	'Профилактика',
'Maintenance mode'				=>	'Режим профилактики',
'Maintenance mode label'		=>	'Установить на форуме режим профилактики.',
'Maintenance message label'		=>	'Сообщение о режиме профилактики',
'Maintenance message help'		=>	'Сообщение, которое будет показано, когда форум перейдет в режим профилактики. Если не ввести свой вариант, будет показано сообщение по умолчанию. Для написания сообщения можно использовать HTML-код',
'Maintenance message default'	=>	'Форум временно переведен в режим профилактики. Пожалуйста, попробуйте зайти снова через несколько минут.<br /><br />Администрация',

);