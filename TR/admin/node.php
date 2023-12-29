<?php
/**
 * Pterodactyl - Panel
 * Telif Hakkı (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * Bu yazılım MIT lisansı şartlarına tabidir.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Sağlanan FQDN veya IP adresi geçerli bir IP adresine çözümlenemiyor.',
        'fqdn_required_for_ssl' => 'Bu düğümde SSL kullanabilmek için bir genel IP adresine çözümlenen tam bir alan adı gereklidir.',
    ],
    'notices' => [
        'allocations_added' => 'Bu düğüme başarıyla tahsisler eklendi.',
        'node_deleted' => 'Düğüm panelden başarıyla kaldırıldı.',
        'location_required' => 'Bu panelde bir düğüm ekleyebilmeniz için en az bir konum yapılandırmış olmanız gerekmektedir.',
        'node_created' => 'Yeni düğüm başarıyla oluşturuldu. Bu makinedeki daemon\'ı otomatik olarak yapılandırabilirsiniz, \'Configuration\' sekmesini ziyaret ederek. <strong>Herhangi bir sunucu ekleyebilmeniz için öncelikle en az bir IP adresi ve port tahsis etmelisiniz.</strong>',
        'node_updated' => 'Düğüm bilgileri güncellendi. Eğer herhangi bir daemon ayarı değiştirildiyse, bu değişikliklerin etkili olabilmesi için daemon\'ı yeniden başlatmanız gerekecek.',
        'unallocated_deleted' => '<code>:ip</code> için tahsis edilmemiş tüm portlar silindi.',
    ],
];
