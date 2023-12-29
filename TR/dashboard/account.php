<?php

return [
    'email' => [
        'title' => 'E-postanızı Güncelleyin',
        'updated' => 'E-posta adresiniz güncellendi.',
    ],
    'password' => [
        'title' => 'Şifrenizi Değiştirin',
        'requirements' => 'Yeni şifreniz en az 8 karakter uzunluğunda olmalıdır.',
        'updated' => 'Şifreniz güncellendi.',
    ],
    'two_factor' => [
        'button' => 'İki Adımlı Kimlik Doğrulamayı Yapılandır',
        'disabled' => 'Hesabınızda iki faktörlü kimlik doğrulama devre dışı bırakıldı. Artık giriş yaparken bir jeton sağlamanız istenmeyecek.',
        'enabled' => 'Hesabınızda iki faktörlü kimlik doğrulama etkinleştirildi! Bundan sonra giriş yaparken cihazınız tarafından oluşturulan kodu sağlamanız gerekecek.',
        'invalid' => 'Sağlanan jeton geçersizdi.',
        'setup' => [
            'title' => 'İki Adımlı Kimlik Doğrulamayı Ayarla',
            'help' => 'Kodu tarayamıyor musunuz? Aşağıdaki kodu uygulamanıza girin:',
            'field' => 'Jetonu Girin',
        ],
        'disable' => [
            'title' => 'İki Adımlı Kimlik Doğrulamayı Devre Dışı Bırak',
            'field' => 'Jetonu Girin',
        ],
    ],
];
