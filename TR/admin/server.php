<?php
/**
 * Pterodactyl - Panel
 * Telif Hakkı (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * Bu yazılım MIT lisansı şartlarına tabidir.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Bu sunucunun varsayılan tahsisini silmeye çalışıyorsunuz ancak kullanılacak yedek bir tahsis yok.',
        'marked_as_failed' => 'Bu sunucu önceki bir kurulumda başarısız işaretlendi. Bu durumda geçerli durum değiştirilemez.',
        'bad_variable' => ':name değişkeninde doğrulama hatası oluştu.',
        'daemon_exception' => 'Demon ile iletişim kurma girişiminde istisna oluştu ve HTTP/:code yanıt kodu ile sonuçlandı. Bu istisna kaydedildi. (istek id: :request_id)',
        'default_allocation_not_found' => 'Bu sunucunun tahsislerinde istenen varsayılan tahsis bulunamadı.',
    ],
    'alerts' => [
        'startup_changed' => 'Bu sunucunun başlangıç yapılandırması güncellendi. Bu sunucunun yuvası veya egg\'i değiştirildiyse şu anda bir yeniden kurulum gerçekleştirilecek.',
        'server_deleted' => 'Sunucu sistemden başarıyla silindi.',
        'server_created' => 'Sunucu panelde başarıyla oluşturuldu. Lütfen daemon\'ın bu sunucuyu tamamen kurması için birkaç dakika bekleyin.',
        'build_updated' => 'Bu sunucunun yapısı güncellendi. Bazı değişikliklerin etkili olması için bir yeniden başlatma gerekebilir.',
        'suspension_toggled' => 'Sunucunun askıya alma durumu :status olarak değiştirildi.',
        'rebuild_on_boot' => 'Bu sunucu, bir Docker Konteyneri yeniden oluşturmaya ihtiyaç duyacak şekilde işaretlendi. Bu, sunucu bir sonraki sefer başlatıldığında gerçekleşecek.',
        'install_toggled' => 'Bu sunucunun kurulum durumu değiştirildi.',
        'server_reinstalled' => 'Bu sunucu şu anda yeniden kurulum için kuyruğa alındı.',
        'details_updated' => 'Sunucu ayrıntıları başarıyla güncellendi.',
        'docker_image_updated' => 'Bu sunucu için varsayılan Docker imajı başarıyla değiştirildi. Bu değişikliği uygulamak için bir yeniden başlatma gereklidir.',
        'node_required' => 'Bu panelde bir sunucu ekleyebilmeniz için en az bir düğüm yapılandırmış olmanız gerekmektedir.',
        'transfer_nodes_required' => 'Sunucuları transfer edebilmeniz için en az iki düğüm yapılandırmış olmanız gerekmektedir.',
        'transfer_started' => 'Sunucu transferi başlatıldı.',
        'transfer_not_viable' => 'Seçtiğiniz düğümün bu sunucuyu barındırmak için gerekli disk alanı veya belleği yoktur.',
    ],
];
