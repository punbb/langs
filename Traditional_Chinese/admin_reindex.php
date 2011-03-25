<?php

// Language definitions used in all admin files
$lang_admin_reindex = array(

'Reindex heading'			=>	'重建搜尋索引以回復搜尋效能',
'Rebuild index legend'		=>	'重建搜尋索引',
'Reindex info'				=>	'如果您在資料庫中已經動手做過新增、編輯、刪除文章，或者在文章搜尋上有了問題，您應該重建搜尋索引。為了執行效率，您應該先把論壇設定在論壇維護模式，再來執行重建。一經處理完成，您將被重新導回本頁。強烈建議在重建時，打開您瀏覽器的 JavaScript 功能項 (為了在每個處理週期完成後能自動導回本頁)。',
'Reindex warning'			=>	'<strong>重要！</strong> 進行搜尋索引重建程序可能會花上一段時間，而且在處理期間可能會增加伺服主機的負載。當您強制中止重建處理程序時，如果您還要繼續完成這個處理程序的話，請注意最後處理的主題 ID 數字為何，然後將該主題 ID 加 1 重新在"起始主題 ID"欄位填上當作起始 ID。',
'Empty index warning'		=>	'<strong>警告！</strong> 您將無法繼續處理一個被中斷的重建工作，如果說 "清空索引" 這項功能有被選用的話。',
'Posts per cycle'			=>	'每個處理週期的文章數',
'Posts per cycle info'		=>	'每一個瀏覽頁要處理的文章數目。舉例來說，您輸入 100 的話，代表每回有 100 篇文章將被處理，然後頁面再重新刷新。這是為了避免在重建的過程中程式執行的時間過長而中斷處理。',
'Starting post'				=>	'起始文章 ID',
'Starting post info'		=>	'重建工作將從哪個文章 ID 開始。它的預設值是資料庫中可以取得的第一個文章 ID。在一般正常的情況下您不必更改這個設定值。',
'Empty index'				=>	'清空索引',
'Empty index info'			=>	'重建之前先清空搜尋索引 (見下列)。',
'Rebuilding index title'	=>	'重建搜尋索引 &#8230;',
'Rebuilding index'			=>	'重建索引中 &#8230; 趁著重建索引的時間給自己來杯咖啡吧 :-)',
'Processing post'			=>	'正在處理文章 <strong>%s</strong> 於主題 <strong>%s</strong>。',
'Javascript redirect'		=>	'JavaScript 重新導向失敗。',
'Click to continue'			=>	'點擊這裡繼續',
'Rebuild index'				=>	'重建索引',

);