<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'			=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'			=>	'zh-TW',

// Number formatting
'lang_decimal_point'		=>	'.',
'lang_thousands_sep'		=>	',',

// Notices
'Bad request'				=>	'存取錯誤。您使用的連結有誤或已失效。',
'No view'					=>	'您沒有權限瀏覽討論區。',
'No permission'				=>	'您沒有權限瀏覽此頁。',
'CSRF token mismatch'		=>	'無法確認安全標記。一個可能的原因，也許是您進入某個頁面、打算送出表單，或是點選連結後停滯的時間過長。如果您要繼續執行您原本的動作，請點擊確定按鈕。不然您應該點擊取消來回到您原先所處的頁面。',
'No cookie'					=>	'您已經成功登入，然而 cookie 的部分卻無法設定。請檢查您的設定，可能的話您應該啟用 cookies 功能來進入這個網站。',


// Miscellaneous
'Forum index'				=>	'論壇首頁',
'Submit'					=>	'送出',	// "name" of submit buttons
'Cancel'					=>	'取消', // "name" of cancel buttons
'Preview'					=>	'預覽',	// submit button to preview message
'Delete'					=>	'刪除',
'Split'						=>	'分離',
'Ban message'				=>	'您已被停權。',
'Ban message 2'				=>	'封鎖期滿日期在 %s 之後。',
'Ban message 3'				=>	'將您停權的論壇管理員或版面管理員留給您的訊息是:',
'Ban message 4'				=>	'有任何疑問請透過 %s 與論壇管理員聯絡。',
'Never'						=>	'無',
'Today'						=>	'今天',
'Yesterday'					=>	'昨天',
'Forum message'				=>	'論壇訊息',
'Maintenance warning'		=>	'<strong>警告！%s已啟用。</strong> 請勿做登出的動作，否則您將無法再登入。',
'Maintenance mode'			=>	'論壇維護模式',
'Redirecting'				=>	'載入中',
'Forwarding info'			=>	'在 %s %s後您應該會自動地被導引到新的頁面。',
'second'					=>	'秒',	// singular
'seconds'					=>	'秒',	// plural
'Click redirect'			=>	'如果您不想再等，或是您的瀏覽器沒有自動載入新的頁面，請點選此處。',
'Invalid e-mail'			=>	'您輸入的電子郵件地址不正確。',
'New posts'					=>	'最新主題',	// the link that leads to the first new post
'New posts title'			=>	'列出自您上次來訪以來有新文章的主題。',	// the popup text for new posts links
'Active topics'				=>	'熱門主題',
'Active topics title'		=>	'列出包含最新回覆的主題。',
'Unanswered topics'			=>	'尚未回覆的主題',
'Unanswered topics title'	=>	'列出尚未有回覆的主題。',
'Username'					=>	'帳號名稱',
'Registered'				=>	'註冊日期',
'Write message'				=>	'撰寫內容',
'Forum'						=>	'版面',
'Posts'						=>	'文章數',
'Pages'						=>	'頁次',
'Page'						=>	'頁',
'BBCode'					=>	'BBCode',	// You probably shouldn't change this
'Smilies'					=>	'表情符號',
'Images'					=>	'圖片',
'You may use'				=>	'您可以使用: %s',
'and'						=>	'及',
'Image link'				=>	'圖片',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'						=>	'寫道',	// For [quote]'s (e.g., User wrote:)
'Code'						=>	'程式碼',		// For [code]'s
'Forum mailer'				=>	'%s 論壇郵件',	// 系統發函簽名可自行修改 As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'		=>	'撰寫您的文章',
'Required information'		=>	'必要資訊',
'Reqmark'					=>	'*',
'Required'					=>	'(必填)',
'Required warn'				=>	'所有標示為 %s 的欄位在表單送出前必須完成填寫。',
'Crumb separator'			=>	' &#187;&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' - ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'&#8230;', // Ellipsis for paginate
'Paging separator'			=>	'&#160;', //The character or text that separates page numbers for page navigation generally
'Previous'					=>	'上一頁',
'Next'						=>	'下一頁',
'Cancel redirect'			=>	'操作已取消。載入中 &#8230;',
'No confirm redirect'		=>	'尚未確認。操作已取消。載入中 &#8230;',
'Please confirm'			=>	'請確認:',
'Help page'					=>	'使用說明: %s',
'Re'						=>	'回覆:',
'Page info'					=>	'頁碼 [ 第 %1$s 頁 共 %2$s 頁 ]',
'Item info single'			=>	'%s [ %s ]',
'Item info plural'			=>	'%s [ 第 %s 至 %s 則 共 %s 則 ]', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'				=>	'Powered by <strong>%s</strong>, Supported by <strong>%s</strong>.',
'Maintenance'				=>	'論壇維護',
'Installed extension'       =>  '已安裝%s個官方延伸模組 Copyright &copy; 2003&ndash;2011 <a href="http://punbb.informer.com/">PunBB</a>.', 
'Installed extensions'      =>  '已安裝<span id="extensions-used" title="%s">%s個官方延伸模組</span>. Copyright &copy; 2003&ndash;2011 <a href="http://punbb.informer.com/">PunBB</a>.', 

// CSRF confirmation form
'Confirm'					=>	'確認',	// Button
'Confirm action'			=>	'確認動作',
'Confirm action head'		=>	'請確認或取消您最後的動作',

// Title
'Title'						=>	'頭銜',
'Member'					=>	'會員',	// Default title
'Moderator'					=>	'版面管理員',
'Administrator'				=>	'網站管理員',
'Banned'					=>	'停權',
'Guest'						=>	'訪客',

// Stuff for include/parser.php
'BBCode error 1'			=>	'使用 [/%1$s] 標籤卻沒有相對應的 [%1$s] 標籤',
'BBCode error 2'			=>	'[%s] 標籤為空',
'BBCode error 3'			=>	'[%1$s] 標籤不可安插在 [%2$s] 標籤裡',
'BBCode error 4'			=>	'[%s] 標籤不可安插在相同類型的標籤裡',
'BBCode error 5'			=>	'使用 [%1$s] 標籤卻沒有相對應的 [/%1$s] 標籤',
'BBCode error 6'			=>	'[%s] 標籤裡的屬性值為空值',
'BBCode nested list'		=>	'[list] 標籤不能嵌套使用',
'BBCode code problem'		=>	'您使用的 [code] 標籤有問題',

// Stuff for the navigator (top of every page)
'Index'						=>	'首頁',
'User list'					=>	'會員列表',
'Rules'						=>  '站規',
'Search'					=>  '搜尋',
'Register'					=>  '註冊',
'register'					=>	'註冊',
'Login'						=>  '登入',
'login'						=>	'登入',
'Not logged in'				=>  '您尚未登入。',
'Profile'					=>	'個人資料',
'Logout'					=>	'登出',
'Logged in as'				=>	'歡迎再度蒞臨本論壇, %s。',
'Admin'						=>	'管理',
'Last visit'				=>	'您上次來訪的時間是: %s',
'Mark all as read'			=>	'把所有文章標記成已讀',
'Login nag'					=>	'請選擇登入或是註冊一個新帳號。',
'New reports'				=>	'新的檢舉報告',

// Alerts
'New alerts'				=>	'新警告',
'Maintenance alert'			=>	'<strong>警告！</strong>目前論壇正處於維護模式，請勿做登出的動作。一但您在此模式中登出，將無法再登入。',
'Updates'					=>	'PunBB 更新:',
'Updates failed'			=>	'最近一次連線到 punbb.informer.com 的更新服務嘗試檢查更新失敗。有可能是官方提供的更新服務負載過重或是發生故障。如果說這項警告訊息在這一兩天內都沒有消失，您應該取消自動檢查更新的功能，然後改用手動的方式來做程式更新。',
'Updates version n hf'		=>	'PunBB 有新版本釋出，版本號為 %s，可以在 <a href="http://punbb.informer.com/">punbb.informer.com</a> 下載檔案。此外，在管理控制台的 "延伸模組" 功能頁有新的延伸模組修正檔可供安裝使用。',
'Updates version'			=>	'PunBB 有新版本釋出，版本號為 %s，可以在 <a href="http://punbb.informer.com/">punbb.informer.com</a> 下載檔案。',
'Updates hf'				=>	'在管理控制台的 "延伸模組" 功能頁有新的延伸模組修正檔可供安裝使用。',
'Database mismatch'			=>	'資料庫版本不搭配',
'Database mismatch alert'	=>	'您目前使用的 PunBB 資料庫必須與最新版的 PunBB 程式相互搭配。否則您的論壇可能無法正常運作。請將您的論壇程式更新到最新的版本。',

// Stuff for Jump Menu
'Go'						=>	'前往',		// submit button in forum jump
'Jump to'					=>	'前往版面:',

// For extern.php RSS feed
'ATOM Feed'					=>	'Atom',
'RSS Feed'					=>	'RSS',
'RSS description'			=>	'%s 裡最新發表的主題',
'RSS description topic'		=>	'%s 裡最新回覆的文章',
'RSS reply'					=>	'回覆: ',	// The topic subject will be appended to this string (to signify a reply)

// Accessibility
'Skip to content'			=>	'跳至論壇內容',

// Debug information
'Querytime'					=>	'頁面生成時間 %1$s 秒, 共執行查詢 %2$s 條',
'Debug table'				=>	'除錯資訊',
'Debug summary'				=>	'資料庫查詢性能資訊',
'Query times'				=>	'次數',
'Query'						=>	'查詢',
'Total query time'			=>	'總查詢時間',

// For official extensions
'Official extensions inst'	=>	'<span id="extensions-used" title="%1$s">官方延伸模組: %2$s 已安裝。</span>',

);
