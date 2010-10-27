<?php

// Language definitions used in all admin files
$lang_admin_groups = array(

// admin_groups
'Group settings heading'		 => 'Настройки группы, которые действуют, если не перекрываются особыми настройками отдельных форумов',    //Group's default permission that apply when no forum specific permissions are set
'Group title label' 			 => 'Группа',    //Group title
'User title label'  			 => 'Название',    //User title
'Group title head'  			 => 'Группа и название',    //Group and user title
'Group title legend'			 => 'Установка названий',    //Set titles
'Group perms head'  			 => 'Права доступа группы',    //Group permissions
'Group flood head'  			 => 'Установка интервалов времени между действиями',    //Group flood protection settings
'User title help'   			 => 'Это название перекроет ранги пользователей, включенных в группу. Оставьте пустым, чтобы не менять ранги.',    //This title will override any rank users in this group have attained. Leave blank to use default title or rank.
'Remove group legend'   		 => 'Удаление группы',    //Remove group
'Permissions'   				 => 'Права',    //Permissions
'Moderation'					 => 'Модерирование',    //Moderation
'Allow moderate label'  		 => 'Разрешить модерирование пользователей.',    //Allow users moderator privileges.
'Allow mod edit profiles label'  => 'Разрешить изменение профилей пользователей.',    //Allow moderators to edit user profiles.
'Allow mod edit username label'  => 'Разрешить изменение имен пользователей.',    //Allow moderators to rename users.
'Allow mod change pass label'    => 'Разрешить изменение паролей пользователей.',    //Allow moderators to change user passwords.
'Allow mod bans label'  		 => 'Разрешить блокирование пользователей.',    //Allow moderators to ban users.
'Allow read board label'		 => 'Разрешить просмотр форума.',    //Allow users to view the board.
'Allow read board help' 		 => 'Эта настройка применяется ко всему форуму и не может (если выключена) быть перекрыта особыми настройками форума. Если она выключена, то пользователи из этой группы могут только входить/выходить с форума и регистрироваться.',    //This setting applies to every aspect of the board and can, if disabled, not be overridden by forum specific read permissions. If this is disabled, users in this group will only be able to login/logout and register.
'Allow view users label'		 => 'Разрешить просмотр списка пользователей и их профилей.',    //Allow users to view the user list and user profiles.
'Allow post replies label'  	 => 'Разрешить отвечать в темах.',    //Allow users to post replies in topics.
'Allow post topics label'   	 => 'Разрешить создание новых тем.',    //Allow users to post new topics.
'Allow edit posts label'		 => 'Разрешить редактирование своих сообщений.',    //Allow users to edit their own posts.
'Allow delete posts label'  	 => 'Разрешить удаление своих сообщений.',    //Allow users to delete their own posts.
'Allow delete topics label' 	 => 'Разрешить удаление своих тем (включая все ответы).',    //Allow users to delete their own topics (including any replies).
'Allow set user title label'	 => 'Разрешить редактирование своих титулов.',    //Allow users to set their own user titles.
'Allow use search label'		 => 'Разрешить использование поиска.',    //Allow users to use the search feature.
'Allow search users label'  	 => 'Разрешить использование текстового поиска пользователей.',    //Allow users to freetext search for users in the user list.
'Allow send email label'		 => 'Разрешить отправлять e-mail сообщения другим пользователям.',    //Allow users to send e-mails to other users.
'Restrictions'  				 => 'Ограничения',    //Restrictions
'Mod permissions'   			 => 'Права модераторов',    //Moderator permissions
'User permissions'  			 => 'Права пользователей',    //User permissions
'Flood interval label'  		 => 'Интервал между сообщениями',    //Post flood interval
'Flood interval help'   		 => 'Количество секунд, которое должно пройти между двумя сообщениями пользователей из этой группы. Поставьте 0, чтобы выключить.',    //Number of seconds that users in this group have to wait between posts. Set to 0 to disable.
'Search interval label' 		 => 'Интервал между поисками',    //Search flood interval
'Search interval help'  		 => 'Количество секунд, которое должно пройти между двумя попытками поиска по форуму пользователей из этой группы. Поставьте 0, чтобы выключить.',    //Number of seconds that users in this group have to wait between searches. Set to 0 to disable.
'Email flood interval label'	 => 'Интервал между e-mail сообщениями',    //Email flood interval
'Email flood interval help' 	 => 'Количество секунд, которое должно пройти между двумя e-mail сообщениями пользователей из этой группы. Поставьте 0, чтобы выключить.',    //Number of seconds that users in this group have to wait between e-mails. Set to 0 to disable.
'Allow moderate help'   		 => 'Для того чтобы пользователь в этой группе имел возможности модератора, он должен быть назначен модератором хотя бы в одном из форумов. Это можно сделать на странице администрирования пользователя, выбрав вкладку «Администрирование» в профиле пользователя.',    //In order for a user in this group to have moderator abilities, he/she must be assigned to moderate one or more forums. This is done via the user administration page of the user's profile.
'Remove group'  				 => 'Удалить',    //Remove this group
'Edit group'					 => 'Редактировать',    //Edit this group
'default'   					 => '(по умолчанию)',    //(default)
'Cannot remove group'   		 => 'Эту группу нельзя удалить.',    //This group cannot be removed.
'Cannot remove default' 		 => 'Чтобы удалить эту группу, необходимо назначить другую группу «по умолчанию».',    //To remove this group you must assign a new default group.
'Remove group head' 			 => 'Удаление группы «%s» с %s пользователями',    //Remove "%s" group which contains %s members
'Remove group help' 			 => '(Переместить пользователей в эту группу)',    //(Transfer current members to this group)
'Move users to' 				 => 'Переместить пользователей в группу',    //Move users to
'Cannot remove default group'    => 'Группа «по умолчанию» не может быть удалена. Для того чтобы удалить эту группу, вам необходимо назначить другую группу «по умолчанию».',    //The default group cannot be removed. In order to delete this group, you must first setup a different group as the default.
'Add group heading' 			 => 'Добавление новой группы (унаследует права той группы, на основе которой будет создаваться)',    //Add new group (will inherit the permissions of the group it is based on)
'Add group legend'  			 => 'Добавить новую группу',    //Add new group
'Edit group heading'			 => 'Редактирование существующей группы',    //Edit existing group
'Base new group label'  		 => 'Базовая группа',    //Base new group on
'Add group' 					 => 'Добавить новую группу',    //Add new group
'Default group heading' 		 => 'Группа «по умолчанию» для новых пользователей (администраторские и модераторские группы недоступны по соображениям безопасности)',    //Default group for new users (administrator/moderator groups not available for security reasons)
'Default group legend'  		 => 'Назначить группу «по умолчанию» для новых пользователей',    //Set default group for new users
'Default group label'   		 => 'Группа «по умолчанию»',    //Default group
'Set default'   				 => 'Назначить группу',    //Set default group
'Existing groups heading'   	 => 'Существующие группы',    //Existing groups
'Existing groups intro' 		 => 'Предопределенные группы «Гости» и «Администраторы» не могут быть удалены, но их можно отредактировать. Помните, что в некоторых группах определенные настройки недоступны (например, право на редактирование сообщений для гостей). Администраторы всегда имеют полные права.',    //The pre-defined groups Guests and Administrators cannot be removed. They can however be edited. Please note though, that in some groups, certain options are unavailable (e.g. the "edit posts" permission for guests). Administrators always have full permissions.
'Group removed' 				 => 'Группа удалена.',    //Group removed.
'Default group set' 			 => 'Группа «по умолчанию» назначена.',    //Default group set.
'Group added'   				 => 'Группа добавлена.',    //Group added.
'Group edited'  				 => 'Группа отредактирована.',    //Group edited.
'Update group'  				 => 'Отправить',    //Update group
'Must enter group message'  	 => 'Необходимо ввести название группы.',    //You must enter a group title.
'Already a group message'   	 => 'Группа <strong>«%s»</strong> уже существует.',    //There is already a group with the title <strong>"%s"</strong>.
'Moderator default group'   	 => 'Это группа «по умолчанию» для новых пользователей, она не должна содержать прав модератора.',    //This is the default group for new users and therefore cannot be assigned moderator privileges.

);
