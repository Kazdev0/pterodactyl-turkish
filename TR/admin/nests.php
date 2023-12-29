<?php
/**
 * Pterodactyl - Panel
 * Telif Hakkı (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * Bu yazılım MIT lisansı şartlarına tabidir.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => ':name adlı yeni bir yuva başarıyla oluşturuldu.',
        'deleted' => 'Panel\'den istenen yuvayı başarıyla sildiniz.',
        'updated' => 'Yuva yapılandırma seçenekleri başarıyla güncellendi.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Bu Egg ve ilişkili değişkenleri başarıyla içe aktarıldı.',
            'updated_via_import' => 'Bu Egg, sağlanan dosya kullanılarak güncellendi.',
            'deleted' => 'Panel\'den istenen egg başarıyla silindi.',
            'updated' => 'Egg yapılandırması başarıyla güncellendi.',
            'script_updated' => 'Egg kurulum betiği güncellendi ve sunucular kurulduğunda çalışacak.',
            'egg_created' => 'Yeni bir egg başarıyla oluşturuldu. Bu yeni egg\'i uygulamak için çalışan daemon\'ları yeniden başlatmanız gerekecek.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '":variable" değişkeni silindi ve yeniden yapılandırılan sunucularda artık kullanılamayacak.',
            'variable_updated' => '":variable" değişkeni güncellendi. Değişiklikleri uygulamak için bu değişkeni kullanan sunucuları yeniden oluşturmanız gerekecek.',
            'variable_created' => 'Yeni değişken başarıyla oluşturuldu ve bu egg\'e atandı.',
        ],
    ],
];
