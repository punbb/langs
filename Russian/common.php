<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'			=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'			=>	'ru',

// Number formatting
'lang_decimal_point'        =>    '.',
'lang_thousands_sep'        =>    ',',

// Notices
'Bad request'				=>	'Неверный запрос. Ссылка, по которой вы пришли, неверна или устарела.',
'No view'					=>	'У вас нет права просмотра данных разделов.',
'No permission'				=>	'У вас нет прав доступа к данной странице.',
'CSRF token mismatch'		=>	'Невозможно подтвердить маркер доступа. Возможно, прошло некоторое время после первого входа на страницу и последующей отправкой формы или щелчком по ссылке. Если это так, и вы хотите выполнить своё действие до конца, нажмите кнопку «Подтвердить». Для возврата на исходную страницу нужно нажать кнопку «Отмена».',
'No cookie'					=>	'Вы успешно вошли под своей учётной записью, но cookie не установлен. Пожалуйста, проверьте свои настройки, и если возможно, разрешите использование cookie для данного сайта.',


// Miscellaneous
'Forum index'				=>	'Оглавление раздела',
'Submit'					=>	'Отправить',	// "name" of submit buttons
'Cancel'					=>	'Отмена', // "name" of cancel buttons
'Preview'					=>	'Предпросмотр',	// submit button to preview message
'Delete'					=>	'Удалить',
'Split'						=>	'Разделить',
'Ban message'				=>	'Вы заблокированы в данном разделе.',
'Ban message 2'				=>	'Блокировка истекает %s.',
'Ban message 3'				=>	'Администратор или модератор заблокировал вас и оставил следующее сообщение:',
'Ban message 4'				=>	'За дальнейшими разъяснениями обращайтесь к администратору раздела: %s.',
'Never'						=>	'Нет',
'Today'						=>	'Сегодня',
'Yesterday'					=>	'Вчера',
'Forum message'				=>	'Сообщение в разделе',
'Maintenance warning'		=>	'<strong>ВНИМАНИЕ! Включён %s.</strong> НЕ ВЫХОДИТЕ ИЗ-ПОД УЧЁТНОЙ ЗАПИСИ — вы не сможете войти обратно.',
'Maintenance mode'			=>	'режим профилактики',
'Redirecting'				=>	'Перенаправление',
'Forwarding info'			=>	'Вы будете автоматически перенаправлены на новую страницу через %s %s.',
'second'					=>	'секунду',	// singular
'seconds'					=>	'секунд',	// plural
'Click redirect'			=>	'Нажмите здесь, если не хотите ждать (или если ваш браузер не перенаправляет автоматически)',
'Invalid e-mail'			=>	'Введённый адрес e-mail неверен.',
'New posts'					=>	'Новые сообщения',	// the link that leads to the first new post
'New posts title'			=>	'Найти темы с сообщениями после вашего последнего посещения.',	// the popup text for new posts links
'Active topics'				=>	'Активные темы',
'Active topics title'		=>	'Найти темы с недавними сообщениями.',
'Unanswered topics'			=>	'Темы без ответов',
'Unanswered topics title'	=>	'Найти темы, на которые не было ответов.',
'Username'					=>	'Имя пользователя',
'Registered'				=>	'Зарегистрирован',
'Write message'				=>	'Напишите сообщение:',
'Forum'						=>	'Раздел',    // TODO: never used
'Posts'						=>	'Сообщения', // TODO: never used
'Pages'						=>	'Страницы',
'Page'						=>	'Страница',
'BBCode'					=>	'BBCode',	// You probably shouldn't change this
'Smilies'					=>	'Смайлики',
'Images'					=>	'Изображения',
'You may use'				=>	'Вы можете использовать: %s',
'and'						=>	'и',
'Image link'				=>	'изображение',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'						=>	'пишет',	// For [quote]'s (e.g., User wrote:)
'Code'						=>	'Код',		// For [code]'s
'Forum mailer'				=>	'Почтовый робот форума «%s»',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'		=>	'Составьте сообщение',
'Required information'		=>	'Обязательно к заполнению',
'Reqmark'					=>	'*',
'Required'					=>	'(Обязательно)',
'Required warn'				=>	'Все поля, отмеченные знаком «%s», должны быть заполнены перед отправкой формы.',
'Crumb separator'			=>	' »&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' &mdash; ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'…', // Ellipsis for paginate
'Paging separator'			=>	' ', //The character or text that separates page numbers for page navigation generally
'Previous'					=>	'Назад',
'Next'						=>	'Далее',
'Cancel redirect'			=>	'Операция отменена. Перенаправление…',
'No confirm redirect'		=>	'Подтверждение не получено. Операция отменена. Перенаправление…',
'Please confirm'			=>	'Пожалуйста, подтвердите:',
'Help page'					=>	'Справка по: %s',
'Re'						=>	'Re:',
'Page info'					=>	'(Страница %1$s из %2$s)',
'Item info single'			=>	'%s [ %s ]',
'Item info plural'			=>	'%s [ с %s по %s из %s ]', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'                =>  'На основе <strong>%s</strong>, при поддержке <strong>%s</strong>.',
'Maintenance'				=>	'Профилактика',

// CSRF confirmation form
'Confirm'					=>	'Подтвердить',	// Button
'Confirm action'			=>	'Подтверждение',
'Confirm action head'		=>	'Пожалуйста, подтвердите или отмените своё действие',

// Title
'Title'						=>	'Заголовок',
'Member'					=>	'Участник',	// Default title
'Moderator'					=>	'Модератор',
'Administrator'				=>	'Администратор',
'Banned'					=>	'Заблокирован',
'Guest'						=>	'Гость',

// Stuff for include/parser.php
'BBCode error 1'			=>	'Найден тег [/%1$s] без соответствующего [%1$s]',
'BBCode error 2'			=>	'Тег [%s] пуст',
'BBCode error 3'			=>	'Использование тега [%1$s] внутри [%2$s] недопустимо',
'BBCode error 4'			=>	'Вложение тега [%s] в самого себя недопустимо',
'BBCode error 5'			=>	'Найден тег [%1$s] без соответствующего [/%1$s]',
'BBCode error 6'			=>	'Тег [%s] имеет пустой раздел атрибутов',
'BBCode nested list'		=>	'Теги [list] не нужны',
'BBCode code problem'		=>	'Проблема с тегами [code]',

// Stuff for the navigator (top of every page)
'Index'						=>	'Главная',
'User list'					=>	'Пользователи',
'Rules'						=>  'Правила',
'Search'					=>  'Поиск',
'Register'					=>  'Регистрация',
'register'					=>	'зарегистрироваться',
'Login'						=>  'Вход',
'login'						=>	'войти',
'Not logged in'				=>  'Вы не вошли.',
'Profile'					=>	'Профиль',
'Logout'					=>	'Выход',
'Logged in as'				=>	'Вы вошли как %s.',
'Admin'						=>	'Администрирование',
'Last visit'				=>	'Последнее посещение: %s',
'Mark all as read'			=>	'Отметить все темы прочитанными',
'Login nag'					=>	'Пожалуйста, войдите или зарегистрируйтесь.',
'New reports'				=>	'Новые обращения',

// Alerts
'New alerts'				=>	'Новые уведомления',
'Maintenance alert'			=>	'<strong>ВНИМАНИЕ! Включён режим профилактики.</strong> Форум находится в режиме профилактики. <em>НЕ ВЫХОДИТЕ</em> из-под своей учётной записи — вы не сможете войти обратно.',
'Updates'					=>	'Обновления PunBB',
'Updates failed'			=>	'Последняя проверка обновлений на punbb.informer.com завершилась неудачно. Это может означать, что сервис обновлений перегружен или недоступен. Если данное предупреждение не исчезнет в течение одного-двух дней, можно отключить автоматическую проверку и проверять наличие обновлений вручную.',
'Updates version n hf'		=>	'Новая версия PunBB — %s доступна для загрузки на <a href="http://punbb.informer.com/">punbb.informer.com</a>. Кроме этого, один или несколько пакетов исправлений доступны для установки на вкладке «Расширения» интерфейса администратора.',
'Updates version'			=>	'Новая версия PunBB — %s доступна для загрузки на <a href="http://punbb.informer.com/">punbb.informer.com</a>.',
'Updates hf'				=>	'Один или несколько пакетов исправлений доступно для установки на вкладке «Расширения» интерфейса администратора.',
'Database mismatch'			=>	'Несоответствие версии базы данных',
'Database mismatch alert'	=>	'База данных PunBB будет использована в связке с новой версией кода PunBB. Их несоответствие может привести к неработоспособности форума. Рекомендуется обновить форум до самой новой версии PunBB.',

// Stuff for Jump Menu
'Go'						=>	'Перейти',		// submit button in forum jump
'Jump to'					=>	'Перейти в раздел:',

// For extern.php RSS feed
'RSS description'			=>	'Недавние темы раздела «%s».',
'RSS description topic'		=>	'Недавние сообщения в теме «%s».',
'RSS reply'					=>	'Re: ',	// The topic subject will be appended to this string (to signify a reply)

// Accessibility
'Skip to content'			=>	'Перейти к содержимому раздела',

// Debug information
'Querytime'					=>	'Сгенерировано за %1$s секунд(ы), выполнено %2$s запросов',
'Debug table'				=>	'Отладочная информация',
'Debug summary'				=>	'Производительность базы данных',
'Query times'				=>	'Время (с)',
'Query'						=>	'Запрос',
'Total query time'			=>	'Общее время запроса',

// For official extensions
'Official extensions inst'    =>    '<span id="extensions-used" title="%1$s">Official extensions: %2$s installed.</span>',

);
