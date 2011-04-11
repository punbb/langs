<?php

// Language definitions used in install.php
$lang_install = array(

// Install Form
'Install PunBB'				=>	'安裝 PunBB %s',
'Choose language'			=>	'更改安裝語系',
'Choose language help'		=>	'如果覺得使用您自己的母語可以讓您更容易地進行安裝，請從清單中選擇您要使用的語系。',
'Installer language'		=>	'安裝程序語系',
'Choose language legend'	=>	'安裝程序語系',
'Install intro'				=>	'要進行 PunBB 論壇程式安裝，您必須填寫下列表單內容以提供必要的安裝資訊。在完成表單填寫前，請先閱讀頁面中提供的指示說明。如果您在安裝程序中遇到困難，請參考您下載回來的 PunBB 程式壓縮檔裡的說明文件。',
'Part1'						=>	'步驟 1 - 資料庫設定',
'Part1 intro'				=>	'為了進行 PunBB 論壇資料庫設定，請您填寫一些必要的資訊。要進行安裝程序，您必須清楚下列欄位中所需求的內容。請完成本步驟中表單欄位的資料填寫。',
'Database type'				=>	'資料庫種類',
'Database name'				=>	'資料庫名稱',
'Database server'			=>	'資料庫主機位址',
'Database username'			=>	'資料庫使用者帳號',
'Database password'			=>	'資料庫使用者密碼',
'Database user pass'		=>	'資料庫使用者帳號和密碼',
'Table prefix'				=>	'資料表前置字元',
'Database type info'		=>	'PunBB 目前支援 MySQL, PostgreSQL 和 SQLite。假如您在下拉視窗中找不到您要的資料庫選項，代表您目前的 PHP 環境中並沒有提供那項資料庫種類支援。更多關於各類資料庫版本支援資訊可以參考 FAQ 文件說明。',
'Mysql type info'			=>	'PunBB 偵測到您的 PHP 環境支援兩種不同運作方式的 MySQL。您可以發現有兩種選項可供選擇 "<em>MySQL Standard</em>" 和 "<em>MySQL Improved</em>"。如果您無法確定要選擇哪一種來使用的話，可以試試選擇 MySQL Improved，不行的話再選用 MySQL Standard。',
'MySQL InnoDB info'			=>	'PunBB 偵測到您的 MySQL 伺服器可能有支援 <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb-overview.html">InnoDB 儲存引擎</a>。如果您計畫成立一個大型網站的話，選擇使用 InnoDB 儲存引擎會是個不錯的決定。如果您不確定是否有這項功能，建議您不要使用 InnoDB 儲存引擎。',
'Database server info'		=>	'請填寫資料庫伺服器主機位址 (例如: <em>localhost</em>，<em>mysql1.example.com</em> 或是 <em>208.77.188.166</em>)。如果您的資料庫伺服主機並不是採用預設的埠號，您可以在主機位址後面加上指定的埠號 (例如: <em>localhost:3580</em>)。在 SQLite 資料庫使用方面，您可以隨意填寫或者填寫\'localhost\'。',
'Database name info'		=>	'請填寫要用來安裝 PunBB 的資料庫名稱，而且這個資料庫名稱必須是確定存在的。在 SQLite 資料庫使用方面，這裡應該填寫包含路徑的資料庫檔。如果這個資料庫檔並不存在的話，PunBB 將會試著建立這個檔案。',
'Database username info'	=>	'請填寫您要連結的資料庫使用者帳號與密碼。使用 SQLite 資料庫可以忽略這兩個項目。',
'Table prefix info'			=>	'(可選用) - 如果您有使用上的需要，您可以指定資料表前置字元。這樣您就可以在同一個資料庫裡安裝兩份以上的 PunBB 論壇或者是其他應用程式 (例如在每個資料表前加上: <em>foo_</em>)。',
'Part1 legend'				=>	'資料庫資訊',
'Database type help'		=>	'選擇資料庫種類。',
'Database server help'		=>	'請填寫您的資料庫伺服器主機位址。使用 SQLite 者可免填本欄。',
'Database name help'		=>	'請填寫要用來安裝 PunBB 的資料庫名稱，該資料庫名稱必須已存在。',
'Database username help'	=>	'連結資料庫用的使用者帳號。使用 SQLite 者請忽略本欄。',
'Database password help'	=>	'連結資料庫用的使用者密碼。使用 SQLite 者請忽略本欄。',
'Table prefix help'			=>	'可選用的資料表前置字元，例如: "foo_"。',
'Part2'						=>	'步驟 2 - 論壇管理員設定',
'Part2 legend'				=>	'論壇管理員資訊',
'Part2 intro'				=>	'為了要在安裝程序中設定管理 PunBB 論壇的管理員，請您填寫一些必要的資訊。您可以在稍後建立更多位論壇管理員和版面管理員。',
'Admin username'			=>	'論壇管理員帳號',
'Admin password'			=>	'論壇管理員密碼',
'Admin confirm password'	=>	'再確認一次密碼',
'Admin e-mail'				=>	'論壇管理員電子郵件',
'Username help'				=>	'介於 2 至 25 個字元。',
'Password help'				=>	'最少 4 個字元，且有區分英文字大小寫。',
'Confirm password help'		=>	'再填寫一次以供確認。',
'E-mail address help'		=>	'論壇管理員的電子郵件。',
'Part3'						=>	'步驟 3 - 論壇設定',
'Part3 legend'				=>	'論壇資訊',
'Part3 intro'				=>	'請您填寫一些必要的資訊。特別注意安裝網址的填寫，以及仔細閱讀下列所做的說明。',
'Board title'				=>	'論壇名稱',
'Board title and desc'		=>	'論壇名稱與描述',
'Board description'			=>	'論壇描述',
'Base URL'					=>	'安裝網址',
'Board title info'			=>	'請為您安裝的 PunBB 論壇填寫一個論壇名稱以及簡短的說明。這些資訊將會顯示在論壇中每個頁面的上部。保持欄位空白將會使用預設的論壇名稱和描述。這兩項資訊稍後都可以在管理控制台更改。',
'Base URL info'				=>	'在填寫安裝網址時請您特別注意。您必須正確地填寫安裝網址，不然您的論壇可能無法正常運作。這裡所指的網址是您安裝 PunBB 論壇的網址 (網址最後不含 / 斜線，例如: <em>http://forum.example.com</em> 或 <em>http://example.com/~myuser</em>)。請注意下列欄位裡的資料是 PunBB 安裝程序自動預填的，您必須再一次仔細確認。',
'Base URL help'				=>	'PunBB 論壇安裝網址 (網址最後不含 / 斜線)。請閱讀上面所提供的說明。',
'Pun repository'			=>	'Pun 程式庫',
'Pun repository help'		=>	'在 PunBB 安裝完成後，安裝 pun_repository 延伸模組 ("點一下就安裝"延伸模組下載器)。',
'Start install'				=>	'開始安裝', // Label for submit button
'Required'					=>	'(必填)',
'Required warn'				=>	'在完成這個安裝流程前，所有標示著%s的欄位必須完成填寫。',

// Install errors
'No database support'		=>	'目前使用的 PHP 環境中並沒有提供 PunBB 所支援的資料庫種類。要安裝 PunBB，您的 PHP 環境必須至少支援 MySQL、PostgreSQL 或者是 SQLite 其中一種資料庫。',
'Missing database name'		=>	'您必須填寫一個資料庫名稱。請返回再做更正。',
'Username too long'			=>	'帳號名稱不可超過 25 個字元。請返回再做更正。',
'Username too short'		=>	'帳號名稱至少要 2 個字元。請返回再做更正。',
'Pass too short'			=>	'密碼至少要 4 個字元。請返回再做更正。',
'Pass not match'			=>	'密碼不相符。請返回再做更正。',
'Username guest'			=>	'帳號名稱 "guest" 為系統保留字。請返回再做更正。',
'Username BBCode'			=>	'帳號名稱內不可包含任何在論壇中使用的 BBCode 標籤。請返回再做更正。',
'Username reserved chars'	=>	'帳號名稱不可包含 \', " 和 [ 或 ] 等符號。請返回再做更正。',
'Username IP'				=>	'帳號名稱不可使用 IP 位址。請返回再做更正。',
'Invalid email'				=>	'您填寫的論壇管理員電子郵件不正確。請返回再做更正。',
'Missing base url'			=>	'您必須填寫安裝網址。請返回再做更正。',
'No such database type'		=>	'\'%s\' 不是一個正確的資料庫類型。',
'Invalid MySQL version'		=>	'您目前使用的 MySQL 版本為 %1$s，PunBB 至少需要 MySQL %2$s 才能運作正常。在繼續安裝之前，您必須先升級您的 MySQL 版本。',
'Invalid table prefix'		=>	'資料表前置字元 \'%s\' 包含不合規定的字元或者名稱太長。前置字元可以包含英文字母 a 到 z，任何數字和底線字元。然而它們不可以用數字當做開頭。最大長度是 40 個字元。請選擇另一個前置字元。',
'SQLite prefix collision'	=>	'資料表前置字元 \'sqlite_\' 為 SQLite 資料庫所使用的保留字。請選擇另一個前置字元。',
'PunBB already installed'	=>	'一個名為 "%1$susers" 的資料表名稱已經存在於 "%2$s" 資料庫中。這代表 PunBB 可能已經安裝過了或者是其他安裝在同一個資料庫中的應用程式占用了一個或數個 PunBB 所需要用的資料表名稱。如果您要安裝數個 PunBB 論壇在同一個資料庫裡，您必須各別選用不同的資料表前置字元。',
'InnoDB not enabled'		=>	'InnoDB 儲存引擎未啟用。請選擇一個不支援 InnoDB 儲存引擎的資料庫連結，或者啟用您的 MySQL 伺服器裡的 InnoDB 儲存引擎功能。',
'Invalid language'			=>	'您選擇的語系不存在或者不正確。請檢查之後再試一次。',

// Used in the install
'Default language'			=>	'預設語系',
'Default language help'		=>	'PunBB 安裝之後系統預設的語系。這個項目可以在安裝之後另作改變。',
'Default announce heading'	=>	'公告樣本',
'Default announce message'	=>	'<p>在這裡填寫您的公告內容。</p>',
'Default maint message'		=>	"本論壇暫時關閉以進行系統維護。請稍後再來拜訪。<br />\\n<br />\\n/論壇管理員",
'Default rules'				=>	'在這裡填寫您的論壇規則。',
'Default category name'		=>	'測試分區',
'Default forum name'		=>	'測試版面',
'Default forum descrip'		=>	'這只是一個測試版面',
'Default topic subject'		=>	'測試文章',
'Default post contents'		=>	'如果您正在看這裡 (我猜您正在這麼做)，安裝的 PunBB 出現在這裡代表它已經在運作！請您現在就登入，然後前往管理控制台去設定您的論壇。',
'Default rank 1'			=>	'新會員',
'Default rank 2'			=>	'會員',

// Installation completed form
'Success description'		=>	'恭喜您! PunBB %s 已經成功安裝。',
'Success welcome'			=>	'請依照接下來的說明來完成最後的安裝程序。',
'Final instructions'		=>	'最後說明',
'No write info 1'			=>	'重要！要完成最後的安裝程序，請您點擊下方按鈕來下載一個名為 "config.php" 的設定檔。接著，您需要將這個設定檔上傳到您安裝 PunBB 的根目錄裡。',
'No write info 2'			=>	'當您上傳 "config.php" 設定檔後，PunBB 的安裝將會完成！您可以在上傳完成後%s。',
'Go to index'				=>	'前往論壇首頁',
'Warning'					=>	'警告！',
'No cache write'			=>	'<strong>資料快取目錄 (cache) 無法寫入！</strong> 為了使 PunBB 運作正常，在安裝路徑下的 <em>cache</em> 目錄必須要具備寫入資料的權限才行。請使用 chmod 指令來設定該目錄的權限。如果您無法肯定該設成什麼權限的話，可以將目錄權限設成 0777。',
'No avatar write'			=>	'<strong>儲存頭像圖片的目錄無法寫入！</strong> 如果您打算開放論壇會員上傳他們的頭像圖片到您的論壇目錄裡，您必須使存放圖片的目錄 <em>img/avatars</em> 具備寫入資料的權限才行。您可以在稍後自行決定要存放頭像圖片的路徑 (相關功能設定請見管理控制台)。請使用 chmod 指令來設定該目錄的權限。如果您無法肯定該設成什麼權限的話，可以將目錄權限設成 0777。',
'File upload alert'			=>	'<strong>檔案似乎無法上傳到伺服主機！</strong> 如果您打算開放論壇會員上傳他們的頭像圖片您必須在 PHP 中啟用 "file_uploads" 配置設定。當檔案上傳的功能有啟用，上傳頭像圖片的相關功能就能在管理控制台中設定使用。',
'Download config'			=>	'下載 config.php 設定檔', // Label for submit button
'Write info'				=>	'PunBB 已完成安裝！您現在可以 %s。',
);