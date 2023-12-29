<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Doğrulama Dil Satırları
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları, doğrulayıcı sınıfı tarafından kullanılan varsayılan hata mesajlarını içerir.
    | Bazı kuralların boyut gibi birden fazla versiyonu bulunmaktadır. Her bir mesajı dilediğiniz gibi özelleştirebilirsiniz.
    |
    */

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute, :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date tarihinden sonra veya aynı tarih olmalıdır.',
    'alpha' => ':attribute sadece harf içerebilir.',
    'alpha_dash' => ':attribute sadece harf, rakam ve tire içerebilir.',
    'alpha_num' => ':attribute sadece harf ve rakam içerebilir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute, :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal' => ':attribute, :date tarihinden önce veya aynı tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute, :min ile :max arasında olmalıdır.',
        'file' => ':attribute, :min ile :max kilobayt arasında olmalıdır.',
        'string' => ':attribute, :min ile :max karakter arasında olmalıdır.',
        'array' => ':attribute, :min ile :max arasında öğe içermelidir.',
    ],
    'boolean' => ':attribute alanı true veya false olmalıdır.',
    'confirmed' => ':attribute onayı uyuşmuyor.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_format' => ':attribute, :format formatına uymalıdır.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits basamaklı olmalıdır.',
    'digits_between' => ':attribute, :min ile :max arasında basamaklı olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct' => ':attribute alanı tekrarlanan bir değere sahiptir.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı gereklidir.',
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçili :attribute geçersiz.',
    'in_array' => ':attribute alanı, :other içinde bulunmuyor.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'max' => [
        'numeric' => ':attribute, :max değerinden büyük olmamalıdır.',
        'file' => ':attribute, :max kilobayttan büyük olmamalıdır.',
        'string' => ':attribute, :max karakterden büyük olmamalıdır.',
        'array' => ':attribute, :max öğeden fazla olmamalıdır.',
    ],
    'mimes' => ':attribute, :values türünde bir dosya olmalıdır.',
    'mimetypes' => ':attribute, :values türünde bir dosya olmalıdır.',
    'min' => [
        'numeric' => ':attribute, en az :min olmalıdır.',
        'file' => ':attribute, en az :min kilobayt olmalıdır.',
        'string' => ':attribute, en az :min karakter olmalıdır.',
        'array' => ':attribute, en az :min öğe içermelidir.',
    ],
    'not_in' => 'Seçili :attribute geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute formatı geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':other :value olduğunda, :attribute alanı gereklidir.',
    'required_unless' => ':other :values içinde olmadığında, :attribute alanı gereklidir.',
    'required_with' => ':values mevcut olduğunda, :attribute alanı gereklidir.',
    'required_with_all' => ':values mevcut olduğunda, :attribute alanı gereklidir.',
    'required_without' => ':values mevcut olmadığında, :attribute alanı gereklidir.',
    'required_without_all' => ':values hiçbiri mevcut olmadığında, :attribute alanı gereklidir.',
    'same' => ':attribute ve :other aynı olmalıdır.',
    'size' => [
        'numeric' => ':attribute, :size olmalıdır.',
        'file' => ':attribute, :size kilobayt olmalıdır.',
        'string' => ':attribute, :size karakter olmalıdır.',
        'array' => ':attribute, :size öğe içermelidir.',
    ],
    'string' => ':attribute bir metin olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenirken hata oluştu.',
    'url' => ':attribute formatı geçersiz.',

    /*
    |--------------------------------------------------------------------------
    | Özel Doğrulama Öznitelikleri
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları, öznitelik yer tutucularını, "e-posta" yerine "E-posta Adresi" gibi
    | daha okunabilir bir biçimde değiştirmek için kullanılır. Bu sadece mesajları biraz daha düzenli yapmamıza yardımcı olur.
    |
    */

    'attributes' => [],

    // Pterodactyl için iç doğrulama mantığı
    'internal' => [
        'variable_value' => ':env değişkeni',
        'invalid_password' => 'Sağlanan şifre bu hesap için geçersiz.',
    ],
];
