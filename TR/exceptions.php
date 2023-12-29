<?php

return [
    'daemon_connection_failed' => 'Daemon ile iletişim kurulurken HTTP/:code yanıt koduyla bir istisna oluştu. Bu istisna kaydedildi.',
    'node' => [
        'servers_attached' => 'Bir düğümün silinebilmesi için bağlı hiçbir sunucunun olmaması gerekir.',
        'daemon_off_config_updated' => 'Daemon yapılandırması <strong>güncellendi</strong>, ancak Daemon üzerinde yapılandırma dosyasını otomatik olarak güncelleme girişiminde bir hata oluştu. Bu değişiklikleri uygulamak için Daemon için yapılandırma dosyasını (config.yml) manuel olarak güncellemeniz gerekecek.',
    ],
    'allocations' => [
        'server_using' => 'Bu tahsise şu anda bir sunucu atanmış durumda. Bir tahsis sadece hiçbir sunucu atanmış durumdaysa silinebilir.',
        'too_many_ports' => 'Bir seferde tek bir aralıkta 1000\'den fazla port eklemek desteklenmiyor.',
        'invalid_mapping' => ':port için sağlanan eşleme geçersizdi ve işlenemedi.',
        'cidr_out_of_range' => 'CIDR notasyonu yalnızca /25 ile /32 arasındaki maskeleri destekler.',
        'port_out_of_range' => 'Bir tahsiste portlar 1024\'ten büyük ve 65535\'e eşit veya küçük olmalıdır.',
    ],
    'nest' => [
        'delete_has_servers' => 'Etkin sunuculara bağlı bir Yuva Panel üzerinden silinemiyor.',
        'egg' => [
            'delete_has_servers' => 'Etkin sunuculara bağlı bir Yumurta Panel üzerinden silinemiyor.',
            'invalid_copy_id' => 'Bir komut dosyasını kopyalamak için seçilen Yumurta ya mevcut değil veya kendisi bir komut dosyası kopyalıyor.',
            'must_be_child' => 'Bu Yumurta için "Ayarları Kopyala" direktifi, seçilen Yuva için bir alt seçenek olmalıdır.',
            'has_children' => 'Bu Yumurta, bir veya daha fazla diğer Yumurtaların üst öğesidir. Lütfen bu Yumurtayı silmeden önce bu Yumurtaları silin.',
        ],
        'variables' => [
            'env_not_unique' => ':name ortam değişkeni bu Yumurta için benzersiz olmalıdır.',
            'reserved_name' => ':name ortam değişkeni koruma altında ve bir değişkene atanamaz.',
            'bad_validation_rule' => '":rule" doğrulama kuralı bu uygulama için geçerli bir kural değil.',
        ],
        'importer' => [
            'json_error' => 'JSON dosyasını ayrıştırma girişiminde bir hata oluştu: :error.',
            'file_error' => 'Sağlanan JSON dosyası geçerli değil.',
            'invalid_json_provided' => 'Sağlanan JSON dosyası tanınabilir bir formatta değil.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Kendi alt kullanıcı hesabınızı düzenlemek izin verilmez.',
        'user_is_owner' => 'Bu sunucu için sunucu sahibini bir alt kullanıcı olarak ekleyemezsiniz.',
        'subuser_exists' => 'Bu sunucu için o e-posta adresine sahip bir kullanıcı zaten bir alt kullanıcı olarak atanmış durumda.',
    ],
    'databases' => [
        'delete_has_databases' => 'Etkin veritabanları bağlı bir veritabanı sunucusunu silmek mümkün değil.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Zincirlenmiş bir görev için maksimum aralık süresi 15 dakikadır.',
    ],
    'locations' => [
        'has_nodes' => 'Etkin düğümlere bağlı bir konumu silmek mümkün değil.',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Düğüm #:node</a> üzerinde anahtarların iptal edilememesi. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Otomatik dağıtım için belirtilen gereksinimleri karşılayan hiçbir düğüm bulunamadı.',
        'no_viable_allocations' => 'Otomatik dağıtım için gereksinimleri karşılayan hiçbir tahsis bulunamadı.',
    ],
    'api' => [
        'resource_not_found' => 'Bu sunucuda istenen kaynak mevcut değil.',
    ],
];