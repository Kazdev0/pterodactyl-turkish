<?php

return [
    'location' => [
        'no_location_found' => 'Sağlanan kısa kodla eşleşen bir kayıt bulunamadı.',
        'ask_short' => 'Konum Kısa Kodu',
        'ask_long' => 'Konum Açıklaması',
        'created' => 'Yeni bir konum başarıyla oluşturuldu (:name), ID: :id.',
        'deleted' => 'İstenen konum başarıyla silindi.',
    ],
    'user' => [
        'search_users' => 'Bir Kullanıcı Adı, Kullanıcı ID\'si veya E-posta Adresi Girin',
        'select_search_user' => 'Silinecek kullanıcının ID\'si (Yeniden arama için \'0\' girin)',
        'deleted' => 'Kullanıcı Panel\'den başarıyla silindi.',
        'confirm_delete' => 'Bu kullanıcıyı Panel\'den silmek istediğinize emin misiniz?',
        'no_users_found' => 'Sağlanan arama terimi için kullanıcı bulunamadı.',
        'multiple_found' => 'Sağlanan kullanıcı için birden fazla hesap bulundu, --no-interaction bayrağı nedeniyle bir kullanıcıyı silemiyoruz.',
        'ask_admin' => 'Bu kullanıcı bir yönetici mi?',
        'ask_email' => 'E-posta Adresi',
        'ask_username' => 'Kullanıcı Adı',
        'ask_name_first' => 'Adı',
        'ask_name_last' => 'Soyadı',
        'ask_password' => 'Şifre',
        'ask_password_tip' => 'Kullanıcıya e-posta ile rastgele bir şifre ile hesap oluşturmak istiyorsanız, bu komutu yeniden çalıştırın (CTRL+C) ve `--no-password` bayrağını geçirin.',
        'ask_password_help' => 'Şifreler en az 8 karakter uzunluğunda olmalı ve en az bir büyük harf ve rakam içermelidir.',
        '2fa_help_text' => [
            'Bu komut, kullanıcının hesabında etkinse 2 faktörlü kimlik doğrulamayı devre dışı bırakır. Bu yalnızca kullanıcı hesabı kilitlendiğinde bir hesap kurtarma komutu olarak kullanılmalıdır.',
            'Eğer bunu istemediyseniz, işlemi iptal etmek için CTRL+C tuşlarına basın.',
        ],
        '2fa_disabled' => '2-Faktörlü kimlik doğrulama, :email için devre dışı bırakıldı.',
    ],
    'schedule' => [
        'output_line' => '`:schedule` (:hash) içindeki ilk görev için işlem gönderiliyor.',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Servis yedek dosyası :file siliniyor.',
    ],
    'server' => [
        'rebuild_failed' => '":node" düğümünde ":name" (#:id) için yeniden oluşturma isteği hatayla başarısız oldu: :message',
        'reinstall' => [
            'failed' => '":node" düğümünde ":name" (#:id) için yeniden kurulum isteği hatayla başarısız oldu: :message',
            'confirm' => 'Bir grup sunucuya karşı yeniden yükleme yapmak üzeresiniz. Devam etmek istiyor musunuz?',
        ],
        'power' => [
            'confirm' => ':count sunucuya karşı bir :action işlemi yapmak üzeresiniz. Devam etmek istiyor musunuz?',
            'action_failed' => '":node" düğümünde ":name" (#:id) için güç işlemi hatayla başarısız oldu: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Sunucusu (ör. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Portu',
            'ask_smtp_username' => 'SMTP Kullanıcı Adı',
            'ask_smtp_password' => 'SMTP Şifresi',
            'ask_mailgun_domain' => 'Mailgun Alan Adı',
            'ask_mailgun_secret' => 'Mailgun Gizli Anahtar',
            'ask_mandrill_secret' => 'Mandrill Gizli Anahtarı',
            'ask_postmark_username' => 'Postmark API Anahtarı',
            'ask_driver' => 'E-postaları göndermek için hangi sürücü kullanılmalı?',
            'ask_mail_from' => 'E-postaların hangi adresle gönderilmesi gerekiyor',
            'ask_mail_name' => 'E-postaların gönderildiği isim',
            'ask_encryption' => 'Kullanılacak şifreleme yöntemi',
        ],
        'database' => [
            'host_warning' => '"localhost"u veritabanı sunucusu olarak kullanmamanız şiddetle tavsiye edilir, çünkü sık sık soket bağlantı sorunları görüyoruz. Yerel bir bağlantı kullanmak istiyorsanız "127.0.0.1" kullanmalısınız.',
            'host' => 'Veritabanı Sunucusu',
            'port' => 'Veritabanı Portu',
            'database' => 'Veritabanı Adı',
            'username_warning' => 'MySQL bağlantıları için "root" hesabını kullanmak sadece olumsuz bir yaklaşım değil, aynı zamanda bu uygulama tarafından da izin verilmiyor. Bu yazılım için bir MySQL kullanıcısı oluşturmanız gerekecek.',
            'username' => 'Veritabanı Kullanıcı Adı',
            'password_defined' => 'Görünüşe göre zaten bir MySQL bağlantı şifresi tanımlanmış, değiştirmek ister misiniz?',
            'password' => 'Veritabanı Şifresi',
            'connection_error' => 'Sağlanan kimlik bilgileriyle MySQL sunucusuna bağlanılamadı. Dönen hata ":error".',
            'creds_not_saved' => 'Bağlantı kimlik bilgileriniz KAYDEDİLMEDİ. Devam etmeden önce geçerli bağlantı bilgileri sağlamanız gerekecek.',
            'try_again' => 'Geri dönüp tekrar denemek mi istersiniz?',
        ],
        'app' => [
            'settings' => 'UI tabanlı ayarlar düzenleyicisini etkinleştirilsin mi?',
            'author' => 'Egg Yazar E-postası',
            'author_help' => 'Bu Panel tarafından dışa aktarılan egg\'lerin hangi e-posta adresinden gönderileceğini sağlayın. Bu geçerli bir e-posta adresi olmalıdır.',
            'app_url_help' => 'Uygulama URL\'si mutlaka https:// veya http:// ile başlamalıdır. SSL kullanıp kullanmadığınıza bağlıdır. Eğer şema belirtmezseniz, e-postalarınız ve diğer içerikler yanlış konuma bağlanabilir.',
            'app_url' => 'Uygulama URL\'si',
            'timezone_help' => 'Saat dilimi, PHP\'nin desteklediği saat dilimlerinden biriyle eşleşmelidir. Emin değilseniz, lütfen http://php.net/manual/en/timezones.php adresine başvurun.',
            'timezone' => 'Uygulama Saat Dilimi',
            'cache_driver' => 'Önbellek Sürücüsü',
            'session_driver' => 'Oturum Sürücüsü',
            'queue_driver' => 'Kuyruk Sürücüsü',
            'using_redis' => 'Bir veya daha fazla seçenek için Redis sürücüsünü seçtiniz, lütfen aşağıda geçerli bağlantı bilgilerini sağlayın. Genellikle varsayılanları kullanabilirsiniz, eğer yapılandırmalarınızı değiştirmediyseniz.',
            'redis_host' => 'Redis Sunucusu',
            'redis_password' => 'Redis Şifresi',
            'redis_pass_help' => 'Varsayılan olarak, bir Redis sunucusu örneğinin dış dünyada erişilemez olduğu için genellikle bir şifre yoktur. Eğer durum buysa, sadece bir değer girmeden enter tuşuna basın.',
            'redis_port' => 'Redis Portu',
            'redis_pass_defined' => 'Görünüşe göre zaten Redis için bir şifre tanımlı, değiştirmek ister misiniz?',
        ],
    ],
];

