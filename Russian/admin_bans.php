<?php

// Language definitions used in all admin files
$lang_admin_bans = array(

'Ban advanced'  				 => 'Расширенные настройки блокировок',    //Ban advanced settings
'Ban advanced heading'  		 => 'Блокировка по имени пользователя с IP-адресом и адресом e-mail или просто по IP, по e-mail или по обоим адресам',    //Ban by username with IP and e-mail or just ban by IP, by e-mail or both
'Ban criteria legend'   		 => 'Критерий блокировки',    //Ban criteria
'Ban settings legend'   		 => 'Настройки блокировок',    //Ban settings
'Ban IP warning'				 => '<strong>Внимание!</strong> Необходимо быть очень осторожным при блокировке по IP-диапазону, поскольку таким образом можно заблокировать много пользователей, имеющих такой же частичный IP.',    //<strong>Warning!</strong> You should be very careful when banning an IP-range because of the possibility of multiple users matching the same partial IP.
'Current ban head'  			 => 'Блокировку добавил %s',    //Banned by %s
'Username'  					 => 'Имя пользователя:',    //Username:
'Username to ban label' 		 => 'Блокировать пользователя по имени',    //Username to ban
'Ban creator'   				 => 'Создатель блокировки',    //Ban creator
'IP-addresses to ban label' 	 => 'Блокировка по IP-адресам',    //IP-addresses to ban
'IP-addresses help' 			 => 'IP-адрес или IP-диапазон для блокировки (например, 150.11.110.1 или 150.11.110). Разделяйте адреса пробелами. Если IP-адрес уже введен, это - последний известный IP-адрес этого пользователя в базе данных.',    //The IP or IP-ranges you wish to ban (e.g. 150.11.110.1 or 150.11.110). Separate addresses with spaces. If an IP is entered already it is the last known IP of this user in the database.
'IP-addresses help stats'   	 => 'Идите по ссылке, чтобы посмотреть IP-статистику по данному пользователю: ',    //Click the following link to see IP statistics for this user: 
'IP-addresses help link'		 => 'IP-статистика пользователя',    //User IP statistics
'E-mail/domain to ban label'	 => 'Блокировка по e-mail',    //E-mail/domain to ban
'E-mail/domain help'			 => 'Адрес e-mail или домен e-mail для блокировки (например, someone@example.ru или example.ru). Также смотрите пункт «Разрешить регистрацию с заблокированных адресов e-mail» в Настройки/Регистрация для более подробной информации.',    //The e-mail or e-mail domain you wish to ban (e.g. someone@example.com or example.com). See "Allow registration with banned e-mail addresses" in Settings/Registration for more info.
'Ban message label' 			 => 'Сообщение заблокированным',    //Ban message
'Ban message help'  			 => 'Показывается заблокированному пользователю, когда он посетит форум',    //Displayed to the banned user when he/she visits the forums
'Expire date label' 			 => 'Срок блокировки',    //Ban expiry date
'Expire date help'  			 => 'Дата, когда блокировка будет автоматически удалена (формат: ГГГГ-ММ-ДД, например 2008-12-28). Оставьте пустым, если хотите удалить блокировку вручную.',    //The date when this ban should be automatically removed (format: YYYY-MM-DD). Leave blank to remove manually.
'Expires'   					 => 'Срок:',    //Expires:
'Message'   					 => 'Сообщение:',    //Message:
'New ban heading'   			 => 'Заблокировать пользователя по имени',    //Ban specified username
'New ban legend'				 => 'Новая блокировка',    //New ban
'Advanced ban info' 			 => 'На следующей странице введите IP и e-mail адреса. Если необходимо блокировать определенный IP-адрес, IP-диапазон или адрес e-mail, то оставьте поле на этой странице пустым.',    //The next page will let you enter a custom IP and e-mail. If you just want to ban a specific IP/IP-range or e-mail just leave the username on this page blank.
'Existing bans heading' 		 => 'Редактирование или удаление блокировок',    //Edit or remove existing bans
'Add ban'   					 => 'Добавить блокировку',    //Add ban
'Save ban'  					 => 'Сохранить блокировку',    //Save ban
'E-mail'						 => 'E-mail:',    //E-mail:
'IP-ranges' 					 => 'IP / IP-диапазон:',    //IP/IP-ranges:
'Reason'						 => 'Причина',    //Reason
'No bans'   					 => 'В списке нет блокировок.',    //No bans in list.
'Edit ban'  					 => 'Редактировать блокировку',    //Edit ban
'Remove ban'					 => 'Удалить блокировку',    //Remove ban
'Edit or remove'				 => '%s или %s',    //%s or %s
'Ban removed'   				 => 'Блокировка удалена.',    //Ban removed.
'Ban added' 					 => 'Блокировка добавлена.',    //Ban added.
'Ban edited'					 => 'Блокировка отредактирована.',    //Ban edited.
'No user id message'			 => 'Нет зарегистрированных пользователей с этим ID.',    //No user by that ID registered.
'No user username message'  	 => 'Нет зарегистрированных пользователей с этим именем. Если нужно добавить блокировку, не привязанную к имени пользователя, оставьте поле пустым.',    //No user by that username registered. If you want to add a ban not tied to a specific username just leave the username blank.
'User is admin message' 		 => 'Этот пользователь — администратор и не может быть заблокирован. Если необходимо заблокировать администратора, то сначала нужно перевести его в другую группу.',    //The user is an administrator and can't be banned. If you want to ban an administrator, you must first move him/her to any other user group.
'Must enter message'			 => 'Необходимо ввести хотя бы один из параметров блокировки: имя пользователя, IP-адрес или адрес e-mail.',    //You must enter at least one of the following pieces of information: a username, an IP address or an e-mail address.
'Invalid IP message'			 => 'Введен неправильный IP-адрес или IP-диапазон.',    //You entered an invalid IP/IP-range.
'Can\'t ban guest user'			=>	'Гость не может быть заблокирован.',
'Invalid e-mail message'		 => 'Введен неправильный адрес e-mail (например, user@example.ru) или домен адресов e-mail (например, example.ru).',    //The e-mail address (e.g. user@example.com) or partial e-mail address domain (e.g. example.com) you entered is invalid.
'Invalid expire message'		 => 'введен неправильный срок блокировки. Формат должен быть «ГГГГ-ММ-ДД» и дата должна быть хотя бы на один день больше сегодняшней.',    //You entered an invalid expire date. The format should be YYYY-MM-DD and the date must be at least one day in the future.

);
