<?php

// Language definitions used in post.php and edit.php
$lang_post = array(

// Post validation stuff (many are similar to those in edit.php)
'No subject'			 => 'Тема должна содержать заголовок.',    //Topics must contain a subject.
'Too long subject'  	 => 'Заголовок не может быть длиннее 70 символов.',    //Subjects cannot be longer than 70 characters.
'All caps subject'  	 => 'Заголовок не может содержать только заглавные буквы.',    //Subjects cannot contain only capital letters.
'No message'			 => 'Вы должны ввести текст сообщения.',    //You must enter a message.
'Too long message'  	 => 'Длина вашего сообщения %s байт. Это превышает лимит форума в %s байтов.',    //Your post length is %s bytes. This exceeds the %s bytes limit.
'All caps message'  	 => 'Сообщение не может содержать только заглавные буквы.',    //Posts cannot contain only capital letters.
'CSRF token mismatch'    => 'Обнаружена проблема безопасности. Скорее всего, прошло много времени с тех пор как вы открыли страницу. Нажмите кнопку «Отправить» еще раз.',    //Unable to confirm security token. A likely cause for this is that some time passed between when you first entered the page and when you posted the form. Clicking "Submit" again should solve the problem.
'Invalid e-mail'		 => 'Неправильный E-mail адрес.',    //The e-mail address you entered is invalid.

// Posting
'Compose your reply'	 => 'Напишите и отправьте новый ответ',    //Compose and post your new reply
'Compose your topic'	 => 'Создайте новую тему',    //Compose and post your new topic
'Compose edited reply'   => 'Отредактируйте и отправьте ваш ответ',    //Compose and post your edited reply
'Compose edited topic'   => 'Отредактируйте и отправьте ваше тему',    //Compose and post your edited topic
'Guest post legend' 	 => 'Важная информация для гостей',    //Required information for guests
'Post errors'   		 => '<strong>Внимание!</strong> Исправьте следующие ошибки, чтобы добавить сообщение:',    //<strong>Warning!</strong> The following errors must be corrected before your message can be posted:
'Guest name'			 => 'Ваше имя',    //Guest name
'Guest e-mail'  		 => 'Ваш e-mail',    //Guest e-mail
'Post redirect' 		 => 'Сообщение добавлено. Перенаправление…',    //Post entered. Redirecting …
'Post reply'			 => 'Добавление ответа',    //Post new reply
'Post new topic'		 => 'Начать новую тему',    //Post new topic
'Topic subject' 		 => 'Заголовок темы',    //Topic subject
'Write message' 		 => 'Текст сообщения',    //Write message
'Hide smilies'  		 => 'Не показывать графические смайлики для этого сообщения',    //Never show smilies as icons (images) for this post.
'Subscribe' 			 => 'Подписаться и следить за ответами в этой теме',    //Subscribe to this topic.
'Stay subscribed'   	 => 'Оставаться подписанным к этой теме.',    //Stay subscribed to this topic.
'Topic review'  		 => 'Обзор темы (новые сверху)',    //Topic review (newest first)
'Flood' 				 => 'Должно пройти не менее %s секунд между двумя сообщениями. Подождите немного и попытайтесь отправить сообщение еще раз.',    //At least %s seconds have to pass between posts. Please wait a while and try posting again.
'Permalink post'		 => 'Постоянная ссылка на это сообщение',    //Permanent link to this post
'Post settings' 		 => 'Настройки сообщения',    //Optional post settings
'Preview reply' 		 => 'Предпросмотр',    //Preview reply
'Preview new topic' 	 => 'Предпросмотр новой темы',    //Preview your new topic
'Preview reply'			=>	'Предпросмотр', // For preview button
'Preview topic' 		 => 'Предпросмотр темы',    //Preview topic
'Submit reply'  		 => 'Отправить',    //Submit reply
'Submit topic'  		 => 'Отправить',    //Submit topic
'Post byline'   		 => '<span>Сообщение от </span>%s',    //<span>Post by </span>%s
'Topic byline'  		 => '<span>Тема от </span>%s',    //<span>Topic by </span>%s
'Reply byline'  		 => '<span>Ответ от </span>%s',    //<span>Reply by </span>%s
'Post posted'   		 => '<span>Написано </span>%s',    //<span>Posted </span>%s




// Edit post
'Edit post legend'  	 => 'Отредактируйте сообщение и нажмите отправить',    //Edit message
'Edit topic'			 => 'Редактирование темы',    //Edit topic
'Edit reply'			 => 'Редактирование ответа',    //Edit reply
'Silent edit'   		 => 'Не отображать сообщение о редактировании (не отображает «Отредактировано…» при просмотре темы с сообщениями)',    //Silent edit (don't display "Last edited by …" in topic view for this edit).
'Preview edited topic'   => 'Предпросмотр отредактированной темы',    //Preview of your edited topic
'Preview edited reply'   => 'Предпросомтр отредактированного ответа',    //Preview of your edited reply
'Edit redirect' 		 => 'Сообщение отредактировано. Перенаправление…',    //Post updated. Redirecting …

);
