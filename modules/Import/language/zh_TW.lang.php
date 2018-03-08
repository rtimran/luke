<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => '成功匯入檔案讀取',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => '匯入的記錄正在某個流程中使用並且無法編輯，因為部分欄位已被流程鎖定編輯。',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => '發現的錯誤數量。檢視錯誤標籤中由於錯誤而未匯入的列。',
    'LBL_UPDATE_SUCCESSFULLY' => '成功更新記錄',
    'LBL_SUCCESSFULLY_IMPORTED' => '已建立記錄',
    'LBL_STEP_4_TITLE' => '第 {0} 步：匯入檔案',
    'LBL_STEP_5_TITLE' => '第 {0} 步：檢視匯入結果',
    'LBL_CUSTOM_ENCLOSURE' => '按下列條件限定的欄位：',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => '無法發佈。有另一個同名的發佈匯入對應。',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => '無法取消發佈另一個使用者擁有的對應。您有一個同名的匯入對應。',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => '未設定此模組類型的匯入',
    'LBL_IMPORT_TYPE' => '您要如何處理已匯入的資料？',
    'LBL_IMPORT_BUTTON' => '僅建立新記錄',
    'LBL_UPDATE_BUTTON' => '建立新記錄並更新現有記錄',
    'LBL_CREATE_BUTTON_HELP' => '使用此選項建立新記錄。注意：匯入檔案的列中包含與現有記錄 ID 匹配的值，如果這些值對應至 ID 欄位，則不會匯入。',
    'LBL_UPDATE_BUTTON_HELP' => '使用此選項更新現有記錄。匯入檔案中的資料將根據匯入檔案中的記錄 ID 對應至現有記錄。',
    'LBL_NO_ID' => '必要 ID',
    'LBL_PRE_CHECK_SKIPPED' => '跳過預先檢查',
    'LBL_NOLOCALE_NEEDED' => '無需進行地區轉換',
    'LBL_FIELD_NAME' => '欄位名稱',
    'LBL_VALUE' => '值',
    'LBL_ROW_NUMBER' => '列編號',
    'LBL_NONE' => '無',
    'LBL_REQUIRED_VALUE' => '必要值缺失',
    'LBL_ERROR_SYNC_USERS' => '同步至電子郵件用戶端的值無效：',
    'LBL_ID_EXISTS_ALREADY' => 'ID 已經存在於此表格中',
    'LBL_ASSIGNED_USER' => '如果使用者不存在，則使用目前使用者',
    'LBL_SHOW_HIDDEN' => '顯示非正常匯入的欄位',
    'LBL_UPDATE_RECORDS' => '升級現有記錄而不匯入（不能復原操作）',
    'LBL_TEST'=> '測試匯入（不保存或變更資料）',
    'LBL_TRUNCATE_TABLE' => '匯入前清空表格（刪除所有記錄）',
    'LBL_RELATED_ACCOUNTS' => '不建立相關帳戶',
    'LBL_NO_DATECHECK' => '跳過日期檢查（更快，但任何日期錯誤都將導致失敗）',
    'LBL_NO_WORKFLOW' => '此次匯入時不運行工作流程',
    'LBL_NO_EMAILS' => '此次匯入時不發送電子郵件通知',
    'LBL_NO_PRECHECK' => '原生格式模式',
    'LBL_STRICT_CHECKS' => '使用嚴格規則集（同時檢查電子郵件地址和電話號碼）',
    'LBL_ERROR_SELECTING_RECORD' => '選取記錄時出錯：',
    'LBL_ERROR_DELETING_RECORD' => '刪除記錄時出錯：',
    'LBL_NOT_SET_UP' => '未設定此模組類型的匯入',
    'LBL_ARE_YOU_SURE' => '確定？這將清除此模組中的所有資料。',
    'LBL_NO_RECORD' => '無此 ID 的更新記錄',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => '未設定此模組類型的匯入',
    'LBL_DEBUG_MODE' => '啟用偵錯模式',
    'LBL_ERROR_INVALID_ID' => '提供的 ID 太長，不適合在欄位中（最大程度為 36 字元）',
    'LBL_ERROR_INVALID_PHONE' => '無效電話號碼',
    'LBL_ERROR_INVALID_NAME' => '字串太長，不適合在欄位中',
    'LBL_ERROR_INVALID_VARCHAR' => '字串太長，不適合在欄位中',
    'LBL_ERROR_INVALID_DATETIME' => '無效日期時間',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => '無效日期時間',
    'LBL_ERROR_INVALID_INT' => '無效整數值',
    'LBL_ERROR_INVALID_NUM' => '無效數字值',
    'LBL_ERROR_INVALID_TIME' => '無效時間',
    'LBL_ERROR_INVALID_EMAIL'=>'無效電子郵件地址',
    'LBL_ERROR_INVALID_BOOL'=>'無效值（應為 1 或 0）',
    'LBL_ERROR_INVALID_DATE'=>'無效日期字串',
    'LBL_ERROR_INVALID_USER'=>'無效使用者名稱或 ID',
    'LBL_ERROR_INVALID_TEAM' => '無效小組名稱或 ID',
    'LBL_ERROR_INVALID_ACCOUNT' => '無效帳戶名稱或 ID',
    'LBL_ERROR_INVALID_RELATE' => '無效關聯式欄位',
    'LBL_ERROR_INVALID_CURRENCY' => '無效貨幣值',
    'LBL_ERROR_INVALID_FLOAT' => '無效浮點數',
    'LBL_ERROR_NOT_IN_ENUM' => '值沒有在下拉清單中。允許的值為： ',
    'LBL_ERROR_ENUM_EMPTY' => '值不存在於下拉式清單中。下拉式清單為空',
    'LBL_NOT_MULTIENUM' => '非 MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => '未設定此模組類型的匯入',
    'LBL_IMPORT_MODULE_NO_USERS' => '警告：系統中沒有定義使用者。如果您在匯入前沒有新增使用者，所有記錄將保存在管理員名下。',
    'LBL_IMPORT_MODULE_MAP_ERROR' => '無法發佈。有另一個同名的發布匯入對應。',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => '無法取消發佈另一個使用者擁有的對應。您有一個同名的匯入對應。',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => '目錄',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => '不存在或不可寫入',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => '檔案上載失敗。很可能是 php.ini 檔案中的 upload_max_filesize 設定的值太小。',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => '檔案太大。最大：',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => '位元。在 config.php 中更改 $sugar_config[&#39;upload_maxsize&#39;]',
    'LBL_MODULE_NAME' => '匯入',
    'LBL_MODULE_NAME_SINGULAR' => '匯入',
    'LBL_TRY_AGAIN' => '再試一次',
    'LBL_START_OVER' => '重新開始',
    'LBL_ERROR' => '錯誤：',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => '匯入檔案包含 {0} 列。最佳列數為 {1}。更多列可能降低匯入處理速度。按一下「確定」繼續匯入。按一下「取消」修訂​​並重新載入匯入檔案。',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => '無法匯入系統管理員使用者',
    'ERR_REPORT_LOOP' => '系統偵測到報告重複。使用者無法向其自身報告，其管理人員亦無法向其報告。',
    'ERR_MULTIPLE' => '多個欄被定義相同的欄位名稱。',
    'ERR_MISSING_REQUIRED_FIELDS' => '缺少必填字段：',
    'ERR_MISSING_MAP_NAME' => '缺少自訂對應名稱',
    'ERR_SELECT_FULL_NAME' => '選定姓氏和名字之後，您將無法選取完整姓名。',
    'ERR_SELECT_FILE' => '選取檔案以上載。',
    'LBL_SELECT_FILE' => '選取檔案：',
    'LBL_CUSTOM' => '自訂',
    'LBL_CUSTOM_CSV' => '自訂逗號分隔檔案',
    'LBL_CSV' => '我的電腦上的檔案',
    'LBL_EXTERNAL_SOURCE' => '外部應用程式或服務',
    'LBL_TAB' => '標籤分隔檔案',
    'LBL_CUSTOM_DELIMITED' => '自訂分隔檔案',
    'LBL_CUSTOM_DELIMITER' => '欄位分隔：',
    'LBL_FILE_OPTIONS' => '檔案選項',
    'LBL_CUSTOM_TAB' => '自訂標籤分隔檔案',
    'LBL_DONT_MAP' => '-- 不要對應此欄位 --',
    'LBL_STEP_MODULE' => '您要將資料匯入哪個模組？',
    'LBL_STEP_1_TITLE' => '第 1 步：選取資料來源',
    'LBL_CONFIRM_TITLE' => '步驟 {0}：確認匯入檔案屬性',
    'LBL_CONFIRM_EXT_TITLE' => '步驟 {0}：確認外部來源屬性',
    'LBL_WHAT_IS' => '我的資料儲存於：',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Microsoft Outlook 的自訂對應依賴以逗號分隔 (.csv) 的匯入檔案。如果您匯入的檔案以標籤分隔，可能無法按預期進行對應。',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => '要使用已儲存的匯入設定，請從下列項目中選取：',
    'LBL_PUBLISH' => '發佈',
    'LBL_DELETE' => '刪除',
    'LBL_PUBLISHED_SOURCES' => '如需使用預設的匯入設定，請從下列項目中選取：',
    'LBL_UNPUBLISH' => '取消發佈',
    'LBL_NEXT' => '下一步 >',
    'LBL_BACK' => '< 返回',
    'LBL_STEP_2_TITLE' => '第 {0} 步：上載匯入檔案',
    'LBL_HAS_HEADER' => '頁首列：',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => '注意：',
    'LBL_NOW_CHOOSE' => '現在請選擇要匯入的檔案：',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 和 2000 可以以<b>逗點分隔值</b>格式匯出資料，此格式可用於將資料匯出至系統。如需從 Outlook 匯出資料，請遵照下列步驟：',
    'LBL_OUTLOOK_NUM_1' => '啟動 <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => '選取<b>檔案</b>檔案功能表，然後選取<b>匯入及匯出 ...</b>功能表選項',
    'LBL_OUTLOOK_NUM_3' => '選取<b>匯出到檔案</b>，並按一下「下一步」',
    'LBL_OUTLOOK_NUM_4' => '選取<b>逗點分隔值 (Windows)</b> 並按一下<b>下一步</b>。<br>注意：可能會提示您安裝匯出元件',
    'LBL_OUTLOOK_NUM_5' => '選取<b>連絡人</b>資料夾並按一下<b>下一步</b>。如果您的連絡人保存在多個資料夾中，亦可選擇不同連絡人資料夾。',
    'LBL_OUTLOOK_NUM_6' => '選取檔案名並按一下<b>下一步</b>',
    'LBL_OUTLOOK_NUM_7' => '按一下<b>結束</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com 可以以<b>逗點分隔值</b>格式匯出資料，此格式可用於將資料匯出至系統。如需從 Salesforce.com 匯出資料，請遵照下列步驟：',
    'LBL_SF_NUM_1' => '打開瀏覽器，前往 http://www.salesforce.com，使用您的電子郵件地址和密碼登入',
    'LBL_SF_NUM_2' => '按一下頂部功能表的<b>報表</b>標籤',
    'LBL_SF_NUM_3' => '<b>如需匯出帳戶：</b>按一下<b>使用中帳戶</b>連結<br><b>如需匯出連絡人：</b>按一下<b>郵寄清單</b>連結',
    'LBL_SF_NUM_4' => '第 <b>1 步：選取報表類型</b>，選取<b>表格式報表</b>並按一下<b>下一步</b>',
    'LBL_SF_NUM_5' => '第 <b>2 步：選取報表欄</b>，選取您要匯出的欄，並按一下<b>下一步</b>',
    'LBL_SF_NUM_6' => '第 <b>3 步：選取要總結的資訊</b>，只需按一下<b>下一步</b>',
    'LBL_SF_NUM_7' => '第 <b>4 步：為報表欄排序</b>，只需按一下<b>下一步</b>',
    'LBL_SF_NUM_8' => '第 <b>5 步：選取報表標準，</b>在<b>開始日期</b>選取一個足夠久遠的日期以將您的所有帳戶包含在內。您亦可使用進階標準匯出帳戶子集。完成之後，按一下<b>運行報表</b>',
    'LBL_SF_NUM_9' => '即將產生報表，頁面將顯示<b>報表產生狀態：完成</b>。現在，按一下<b>匯出至 Excel</b>',
    'LBL_SF_NUM_10' => '<b>匯出報表：</b>，對於<b>匯出檔案格式：</b>，選擇<b>逗號分隔 .csv</b>。按一下 <b>匯出</b>。',
    'LBL_SF_NUM_11' => '快顯對話方塊將提示您在電腦上儲存匯出檔案。',
    'LBL_IMPORT_ACT_TITLE' => 'Act! 可以<b>逗號分隔值</b>格式匯出資料，此格式可用於將資料匯出至系統。如需從 Act! 匯出資料，請遵照下列步驟：',
    'LBL_ACT_NUM_1' => '啟動 <b>ACT!</b>',
    'LBL_ACT_NUM_2' => '選取 <b>檔案</b>功能表，<b>資料交換</b>功能表選項，然後是<b>匯出...</b>功能表選項',
    'LBL_ACT_NUM_3' => '選取檔案類型<b>文字分隔</b>',
    'LBL_ACT_NUM_4' => '選擇匯出資料的檔案名和位置並按一下<b>下一步</b>',
    'LBL_ACT_NUM_5' => '選取<b>僅限連絡人記錄</b>',
    'LBL_ACT_NUM_6' => '按一下<b>選項...</b>按鈕',
    'LBL_ACT_NUM_7' => '選取<b>逗號</b>作為欄位分隔符字元',
    'LBL_ACT_NUM_8' => '在核取方塊中勾選<b>是，匯出欄位名稱</b>並按一下<b>確定</b>',
    'LBL_ACT_NUM_9' => '按一下<b>下一步</b>',
    'LBL_ACT_NUM_10' => '選取<b>所有記錄</b>並按一下<b>完成</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => '很多應用程式都允許您將資料匯出至<b>逗號分隔文字檔案 (.csv)</b>，遵照下列一般步驟即可：',
    'LBL_CUSTOM_NUM_1' => '啟動應用程式並打開資料檔案',
    'LBL_CUSTOM_NUM_2' => '選取<b>另存為...</b>或<b>匯出...</b>功能表選項',
    'LBL_CUSTOM_NUM_3' => '以 <b>CSV</b> 或<b>逗點分隔值</b>格式儲存文件',
    'LBL_IMPORT_TAB_TITLE' => '很多應用程式都允許您將資料匯出至<b>標籤分隔文字檔案 (.tsv or .tab)</b>，遵照下列一般步驟即可：',
    'LBL_TAB_NUM_1' => '啟動應用程式並打開資料檔案',
    'LBL_TAB_NUM_2' => '選取<b>另存為...</b>或<b>匯出...</b>功能表選項',
    'LBL_TAB_NUM_3' => '以 <b>TSV</b> 或<b>逗點分隔值</b>格式儲存文件',
    'LBL_STEP_3_TITLE' => '第 {0} 步：確認欄位對應',
    'LBL_STEP_DUP_TITLE' => '第 {0} 步：檢查可能的重複項',
    'LBL_SELECT_FIELDS_TO_MAP' => '在下列清單中，選取應該在系統匯入至每個欄位的匯入檔案中的欄位。完成後，按一下<b>下一步</b>：',
    'LBL_DATABASE_FIELD' => '模組欄位',
    'LBL_HEADER_ROW' => '頁首列',
    'LBL_HEADER_ROW_OPTION_HELP' => '如果匯入檔案的頂部列是一個包含欄位標籤的頁首列，請選取此項。',
    'LBL_ROW' => '列',
    'LBL_SAVE_AS_CUSTOM' => '儲存為自訂對應：',
    'LBL_SAVE_AS_CUSTOM_NAME' => '自訂對應名稱：',
    'LBL_CONTACTS_NOTE_1' => '必須對應姓氏或全名。',
    'LBL_CONTACTS_NOTE_2' => '如果對應全名，則會忽略姓和名。',
    'LBL_CONTACTS_NOTE_3' => '如果對應全名，在插入資料庫時，全名欄位中的資料將分為名字和姓氏。',
    'LBL_CONTACTS_NOTE_4' => '在插入資料庫時，以街道地址 2 和街道地址 3 結尾的欄位將與主要街道地址合併。',
    'LBL_ACCOUNTS_NOTE_1' => '在插入資料庫時，以街道地址 2 和街道地址 3 結尾的欄位將與主要街道地址合併。',
    'LBL_REQUIRED_NOTE' => '必填欄位：',
    'LBL_IMPORT_NOW' => '現在匯入',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => '無法打開已匯入檔案以讀取',
    'LBL_NOT_SAME_NUMBER' => '檔案中每行的欄位數量不一致',
    'LBL_NO_LINES' => '沒有在您的匯入檔案中偵測到行。請確保檔案中沒有空行並再試一次。',
    'LBL_FILE_ALREADY_BEEN_OR' => '匯入檔案已處理或不存在',
    'LBL_SUCCESS' => '成功：',
	'LBL_FAILURE' => '匯入失敗：',
    'LBL_SUCCESSFULLY' => '匯入成功',
    'LBL_LAST_IMPORT_UNDONE' => '匯入沒有完成。',
    'LBL_NO_IMPORT_TO_UNDO' => '沒有匯入的檔案需要復原。',
    'LBL_FAIL' => '失敗：',
    'LBL_RECORDS_SKIPPED' => '跳過記錄，因為這些記錄缺少一個或多個必填欄位',
    'LBL_IDS_EXISTED_OR_LONGER' => '跳過記錄，因為記錄 ID 已經存在或長於 36 個字元',
    'LBL_RESULTS' => '結果',
    'LBL_CREATED_TAB' => '已建立記錄',
    'LBL_DUPLICATE_TAB' => '重複項',
    'LBL_ERROR_TAB' => '錯誤',
    'LBL_IMPORT_MORE' => '重新匯入',
    'LBL_FINISHED' => '已完成',
    'LBL_UNDO_LAST_IMPORT' => '撤銷匯入',
    'LBL_LAST_IMPORTED'=>'已建立',
    'ERR_MULTIPLE_PARENTS' => '您只能定義一個父代 ID',
    'LBL_DUPLICATES' => '找到重複項',
    'LNK_DUPLICATE_LIST' => '下載重複項清單',
    'LNK_ERROR_LIST' => '下載錯誤清單',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => '下載未匯入的列的清單',
    'LBL_UNIQUE_INDEX' => '選取重複比較的索引',
    'LBL_VERIFY_DUPS' => '如需在匯入檔案中檢查現有記錄相符資料，請選取需要檢查的欄位。',
    'LBL_INDEX_USED' => '要檢查的欄位：',
    'LBL_INDEX_NOT_USED' => '可用欄位：',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => '檔案上載失敗。請檢查 Sugar 安裝快取目錄中的檔案權限。',
    'LBL_IMPORT_FIELDDEF_ID' => '唯一 ID 號',
    'LBL_IMPORT_FIELDDEF_RELATE' => '名稱或 ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => '電話號碼',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => '小組名稱或 ID',
    'LBL_IMPORT_FIELDDEF_NAME' => '任意文字',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => '任意文字',
    'LBL_IMPORT_FIELDDEF_TEXT' => '任意文字',
    'LBL_IMPORT_FIELDDEF_TIME' => '時間',
    'LBL_IMPORT_FIELDDEF_DATE' => '日期',
    'LBL_IMPORT_FIELDDEF_DATETIME' => '日期時間',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => '使用者名稱或 ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; 或 &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => '清單',
    'LBL_IMPORT_FIELDDEF_EMAIL' => '電子郵件地址',
    'LBL_IMPORT_FIELDDEF_INT' => '數字（無小數位）',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => '數字（無小數位）',
    'LBL_IMPORT_FIELDDEF_NUM' => '數字（無小數位）',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => '數字（可以有小數位）',
    'LBL_IMPORT_FIELDDEF_FLOAT' => '數字（可以有小數位）',
    'LBL_DATE_FORMAT' => '日期格式：',
    'LBL_TIME_FORMAT' => '時間格式：',
    'LBL_TIMEZONE' => '時區：',
    'LBL_ADD_ROW' => '新增欄位',
    'LBL_REMOVE_ROW' => '移除欄位',
    'LBL_DEFAULT_VALUE' => '預設值',
    'LBL_SHOW_ADVANCED_OPTIONS' => '檢視匯入檔案屬性',
    'LBL_HIDE_ADVANCED_OPTIONS' => '隱藏匯入檔案屬性',
    'LBL_SHOW_NOTES' => '檢視附註',
    'LBL_HIDE_NOTES' => '隱藏附註',
    'LBL_SHOW_PREVIEW_COLUMNS' => '顯示預覽欄',
    'LBL_HIDE_PREVIEW_COLUMNS' => '隱藏預覽欄',
    'LBL_SAVE_MAPPING_AS' => '如需儲存匯入設定，請為已儲存設定提供名稱：',
    'LBL_OPTION_ENCLOSURE_QUOTE' => '單引號 (&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => '雙引號 (")',
    'LBL_OPTION_ENCLOSURE_NONE' => '無',
    'LBL_OPTION_ENCLOSURE_OTHER' => '其他：',
    'LBL_IMPORT_COMPLETE' => '結束',
    'LBL_IMPORT_COMPLETED' => '已完成匯入',
    'LBL_IMPORT_ERROR' => '匯入出錯',
    'LBL_IMPORT_RECORDS' => '正在匯入記錄',
    'LBL_IMPORT_RECORDS_OF' => '的',
    'LBL_IMPORT_RECORDS_TO' => '收件者',
    'LBL_CURRENCY' => '貨幣：',
    'LBL_SYSTEM_SIG_DIGITS' => '系統有效數字',
    'LBL_NUMBER_GROUPING_SEP' => '千位分隔符：',
    'LBL_DECIMAL_SEP' => '小數點符號：',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => '名稱顯示格式',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => '範例',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" 稱呼，"f" 名字，"l" 姓氏</i>',
    'LBL_CHARSET' => '檔案編碼：',
    'LBL_MY_SAVED_HELP' => '使用此選項為此次匯入應用預設匯入設定，包括屬性、對應和任何重複檢查設定。<br><br>按一下 <b>刪除</b>為所有使用者刪除對應。 ',
    'LBL_MY_SAVED_ADMIN_HELP' => '使用此選項為此次匯入應用預設匯入設定，包括屬性、對應和任何重複檢查設定。<br><br>按一下 <b>發佈</b>向其他使用者提供此對應。<br>按一下<b>取消發佈</b>讓其他使用者無法使用此對應。<br>按一下<b>刪除</b>為所有使用者刪除對應。',
    'LBL_MY_PUBLISHED_HELP' => '使用此選項為此次匯入應用預設匯入設定，包括屬性、對應和任何重複檢查設定。',
    'LBL_ENCLOSURE_HELP' => '<p><b>限定詞字元</b>用來附上預定的欄位內容，包括用作分隔符的任意字元。<br><br>例如：如果分隔符是逗號 (,) 而限定詞是引號 (")，<br><b>"Cupertino, California"</b> 將匯入至應用程式的同一個欄位，並顯示為 <b>Cupertino, California</b>。<br>如果沒有限定詞字元，或如果限定詞是不同字元，<br><b>"Cupertino, California"</b> 將匯入兩個相鄰欄位並顯示為 <b>"Cupertino</b> 和 <b>"California"</b>。<br><br>注意：匯入檔案可能不包含任何限定詞字元。<br>Excel 中建立的逗號和標籤分隔檔案的預設限定詞為引號。</p>',
    'LBL_DELIMITER_COMMA_HELP' => '使用此選項選取並上載包含您要匯入的資料的工作表檔案。例如：逗號分隔 .csv 檔案或從 Microsoft Outlook 匯出檔案。',
    'LBL_DELIMITER_TAB_HELP' => '如果匯入檔案欄位之間的分隔字元是<b>標籤</b>，且副檔名為 .txt，請選取次選項。',
    'LBL_DELIMITER_CUSTOM_HELP' => '如果匯入檔案欄位之間的分隔字元是逗號或 TAB，請選取次選項，並在相鄰欄位中輸入此字元。',
    'LBL_DATABASE_FIELD_HELP' => '此欄顯示模組中的所有欄位。選取一個欄位以對應匯入檔案列中的資料。',
    'LBL_HEADER_ROW_HELP' => '此欄顯示匯入檔案頁首列的標籤。',
    'LBL_DEFAULT_VALUE_HELP' => '如果匯入檔案的欄位不包含資料，請在建立或更新的紀錄中指定欄位使用的值。',
    'LBL_ROW_HELP' => '此欄顯示匯入檔案中第一個非頁首列的資料。如果頁首列標籤出現在此欄，請按一下「返回」以在匯入檔案屬性中指定頁首列。',
    'LBL_SAVE_MAPPING_HELP' => '輸入一個名稱並保存匯入設定，包括用於重複檢查的欄位對應和索引。保存匯入設定以在未來匯入時使用。',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => '上載匯入檔案時，可能自動偵測到某些檔案屬性。請按照需要檢視並管理此類屬性。<br>注意：此處提供的設定僅限於此次匯入<br>，它不會複寫您的整體使用者設定。',
    'LBL_VERIFY_DUPLCATES_HELP' => '在系統中查找可能被視為與即將透過執行匹配資料重複檢查而匯入的記錄重複的現有記錄。拖動至「檢查資料」欄的欄位將用作重複檢查。匯入檔案中包含匹配資料的列將在下一頁列出，您可以選取要匯入的列。',
    'LBL_IMPORT_STARTED' => '已開始匯入：',
    'LBL_IMPORT_FILE_SETTINGS' => '匯入檔案設定',
    'LBL_RECORD_CANNOT_BE_UPDATED' => '由於權限問題，此記錄不能更新',
    'LBL_DELETE_MAP_CONFIRMATION' => '您確定要刪除已儲存的匯入設定嗎？',
    'LBL_THIRD_PARTY_CSV_SOURCES' => '如果匯入檔案資料是從以下來源匯出，請選取具體來源。',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => '選取來源以自動應用自訂對應，以便簡化對應流程（下一步）。',
    'LBL_EXTERNAL_SOURCE_HELP' => '使用此選項直接從外部應用程式或服務匯出資料，如 Gmail。',
    'LBL_EXAMPLE_FILE' => '下載匯入檔案範本',
    'LBL_CONFIRM_IMPORT' => '您已選取在匯入過程中更新記錄。您將無法撤銷對現有記錄進行的更新。但如有必要，您可以撤銷（刪除）匯入過程中建立的記錄。按一下「取消」以選取僅建立新記錄，或按一下「確定」繼續。',
    'LBL_CONFIRM_MAP_OVERRIDE' => '警告：您已為此匯入選取自訂對應，您要繼續嗎？',
    'LBL_EXTERNAL_FIELD' => '外部欄位',
    'LBL_SAMPLE_URL_HELP' => '下載包含模組欄位頁首列的樣本匯出檔案。此檔案可用作範本，用於建立包含您要匯入的資料的匯入檔案。',
    'LBL_AUTO_DETECT_ERROR' => '無法偵測匯入檔案中的欄位分隔符號和限定詞。請在匯入檔案性質中確認設定。',
    'LBL_MIME_TYPE_ERROR_1' => '選定檔案可能不包含分隔符號清單。請檢查檔案類型。我們建議使用逗號分隔檔案 (.csv)。',
    'LBL_MIME_TYPE_ERROR_2' => '如需繼續匯入選定檔案，按一下「確定」。如需上載新檔案，按一下「再試一次」',
    'LBL_FIELD_DELIMETED_HELP' => '欄位分隔符號定義了用於分隔欄位欄的字元。',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => '選取包含由分隔符號分隔的資料的檔案，如逗號或標籤分隔檔案。建議使用 .csv 檔案類型。',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => '無法擷取來源介面卡，請稍後再試一次。',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => '無法擷取外部摘要，請稍後再試一次。',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => '匯入快取目錄不可寫入。',
    'LBL_ADD_FIELD_HELP' => '使用此選項，在所有已建立/已更新記錄的欄位中新增值。選取欄位，然後在預設值一欄為此欄位輸入或選取一個值。',
    'LBL_MISSING_HEADER_ROW' => '未找到頁首列',
    'LBL_CANCEL' => '取消',
    'LBL_SELECT_DS_INSTRUCTION' => '準備好開始匯入嗎？選取您要匯入的資料來源？',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => '在電腦上選取一個包含您要匯入資料的檔案，或下載範本開始建立匯入檔案。',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => '以下是匯入檔案的前幾列如何在已偵測到的檔案屬性中顯示。如果偵測到頁首列，它將顯示在表格頂部列。檢視匯入檔案屬性，以變更已偵測屬性和設定其他屬性。更新設定也將更新表格中顯示的資料。',
    'LBL_SELECT_MAPPING_INSTRUCTION' => '下列表格包含模組中與匯入檔案中的資料對應的所有欄位，如果檔案包含頁首列，檔案中的欄位將對應與之匹配的欄位。如果匯入資料含有日期，年份必須為 YYYY 格式。檢查此類對應，以確保它們符合您的預期，您亦可在必要的時候做出變更。為幫助您檢查對應，第 1 列將顯示檔案中的資料。請確保對應所有必填欄位（使用星號標記）。',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => '為避免建立重複記錄，請選取在匯入資料時，您想要用於執行重複檢查的對應欄位。選定欄位內的現有記錄值將對照匯入檔案進行檢查。如果找到對應資料，匯入檔案中包含此資料的列將與匯入結果（下一頁）同時顯示。您隨後可以選取要繼續匯入的列。',
    'LBL_EXT_SOURCE_SIGN_IN' => '登入',
    'LBL_EXT_SOURCE_SIGN_OUT' => '登出',
    'LBL_DUP_HELP' => '根據重複檢查，因包含與現有記錄值對應的資料而無法匯入的列如下所示。對應的資料已亮顯。如需重新匯入這些列，請下載該清單進行修改，然後按一下<b>重新匯入</b>。',
    'LBL_DESELECT' => '取消選取',
    'LBL_SUMMARY' => '摘要',
    'LBL_OK' => '確定',
    'LBL_ERROR_HELP' => '匯入檔案中由於錯誤而無法匯入的列如下所示。如需重新匯入這些列，請下載該清單進行修改，然後按一下<b>重新匯入</b>。',
    'LBL_EXTERNAL_MAP_HELP' => '下表包含互相對應的外部來源欄位和模組欄位。請檢查對應並確保它們符合您的預期，您亦可在必要時進行修改。請確保對應所有必填欄位（使用星號標記）。',
    'LBL_EXTERNAL_MAP_NOTE' => '將嘗試匯入所有 Google 連絡人群組內的連絡人。',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => '新建立的使用者的使用者名稱預設為 Google Contact 的全名。建立使用者記錄後，仍可更改使用者名稱。',
    'LBL_EXTERNAL_MAP_SUB_HELP' => '按一下<b>立即匯入</b>以開始匯入。只有包含姓的項目才會建立記錄。由於姓名和/或電子郵件地址與現有記錄匹配而被確定為重複項的資料不會建立記錄。',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => '此列顯示外部來源欄位，其中包含用於建立新記錄的資料。',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => '如果外部來源欄位不包含任何資料，請指定一個值以在新建立記錄的欄位中使用。',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => '要向您本人以外的使用者指派新記錄，請使用預設值欄選取不同使用者。',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => '要向您的預設小組以外的小組指派新記錄，請使用預設值欄選取不同小組。',
    'LBL_SIGN_IN_HELP' => '如需啟用此服務，請在使用者設定頁面的外部帳戶標籤下登入。',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "嘗試在不支持此功能的 Bean 中處理電子郵件地址。",
);
