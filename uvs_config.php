<?php
/* Voucher front page */
$uvs_title          =   'Unifi Voucher Service'; // The title of your voucher page
$uvs_subtitle       =   'Please choose a voucher to get access to our network!'; // Here you can write down your subtitle or some comment

/* Translate if you want */
$uvs_quota          =   ''; // Quota
$uvs_usages         =   ''; // Usages
$uvs_hours          =   'Hours';
$uvs_day            =   'Day';
$uvs_days           =   'Days';
$uvs_expiration     =   ''; // Valid for
$uvs_upload         =   ''; // Upload Bandwidth
$uvs_download       =   ''; // Download Bandwidth
$uvs_uprate         =   'Kbps';
$uvs_downrate       =   'Kbps';
$uvs_wifissid       =   'SSID:';

/* Optional changes */
$uvs_folder         =   'unifi-voucher-service'; // If you want to rename your folder
$uvs_printer        =   'QL-700'; // For more information about supported printers visit: https://pypi.org/project/brother_ql/
$uvs_labelsize      =   '62x29'; // For more information about supported labels visit: https://pypi.org/project/brother_ql/
$uvs_usbid          =   'file:///dev/usb/lp0'; // Remember your printer ID. To identify your printer at your usb-port type lsusb, as mention in step 5.
$uvs_vlan           =   'RLGuest'; // Name of the wireless guest network

$uvs_alternatives = [
    ["name"=> "1 Day", "key" => "1dayfree", "url" => "codes/1-day-free.php"],
    ["name"=> "3 Days", "key" => "3dayfree", "url" => "codes/3-day-free.php"],
    ["name"=> "7 Days", "key" => "7dayfree", "url" => "codes/codes/1-week-free.php"],
    ["name"=> "Kids", "key" => "kidsfree", "url" => "codes/kids-free.php"]
];

/* 1 day free */
$uvs_1df_site_id    =   'default'; // The site where you want to create the voucher
$uvs_1df_note       =   '1 day'; // Note on the voucher
$uvs_1df_expiration =   1440; // Expiration Time (1 Day = 1440)
$uvs_1df_quota      =   2; // 1 = One time, 2 = Multi use
$uvs_1df_up         =   null; // Bandwidth Limit Upload in kbits
$uvs_1df_down       =   null; // Bandwidth Limit Download in kbits
$uvs_1df_limit      =   null; // Byte Quota per use in MB (null=unlimited)
$uvs_1df_count      =   1; // How many vouchers - WARNING: Currently we can send just 1 voucher to the printer, so keep it for now.

/* 3 day free */
$uvs_3df_site_id    =   'default'; // The site where you want to create the voucher
$uvs_3df_note       =   '7 days'; // Note on the voucher
$uvs_3df_expiration =   60*24*7; // Expiration Time (3 Day)
$uvs_3df_quota      =   2; // 1 = One time, 2 = Multi use
$uvs_3df_up         =   null; // Bandwidth Limit Upload in kbits
$uvs_3df_down       =   null; // Bandwidth Limit Download in kbits
$uvs_3df_limit      =   null; // Byte Quota per use in MB (null=unlimited)
$uvs_3df_count      =   1; // How many vouchers - WARNING: Currently we can send just 1 voucher to the printer, so keep it for now.

/* 7 day free */
$uvs_7df_site_id    =   'default'; // The site where you want to create the voucher
$uvs_7df_note       =   '90 days'; // Note on the voucher
$uvs_7df_expiration =   60*24*30*3; // Expiration Time (1 Week = 10080)
$uvs_7df_quota      =   4; // 1 = One time, 2 = Multi use
$uvs_7df_up         =   null; // Bandwidth Limit Upload in kbits
$uvs_7df_down       =   null; // Bandwidth Limit Download in kbits
$uvs_7df_limit      =   null; // Byte Quota per use in MB (null=unlimited)
$uvs_7df_count      =   1; // How many vouchers - WARNING: Currently we can send just 1 voucher to the printer, so keep it for now.

/* kids */
$uvs_kids_site_id    =   'default'; // The site where you want to create the voucher
$uvs_kids_note       =   'Kids'; // Note on the voucher
$uvs_kids_expiration =   60*24*7; // Expiration Time (1 Month = 44640)
$uvs_kids_quota      =   1; // 1 = One time, 2 = Multi use
$uvs_kids_up         =   null; // Bandwidth Limit Upload in kbits
$uvs_kids_down       =   null; // Bandwidth Limit Download in kbits
$uvs_kids_limit      =   null; // Byte Quota per use in MB (null=unlimited)
$uvs_kids_count      =   1; // How many vouchers - WARNING: Currently we can send just 1 voucher to the printer, so keep it for now.

?>
