## Veritabanı Yapısı

Bu projede kullanılan veritabanının adı **e-ticaret** olup, iki tablo bulunmaktadır: `user` ve `user_detay`.

### Tablo 1: `user`
Bu tablo, kullanıcı bilgilerini saklar.

| Sütun Adı   | Veri Tipi  | Açıklama                      |
|-------------|------------|-------------------------------|
| user_id     | INT        | Birincil anahtar (Primary Key) |
| username    | VARCHAR    | Kullanıcı adı                 |
| email       | VARCHAR    | Kullanıcı e-posta adresi      |
| password    | VARCHAR    | Kullanıcı şifresi             |

### Tablo 2: `user_detay`
Bu tablo, kullanıcı detay bilgilerini saklar ve `user_id` sütunu ile `user` tablosuna referans verir.

| Sütun Adı     | Veri Tipi  | Açıklama                                  |
|---------------|------------|-------------------------------------------|
| user_id       | INT        | Dış anahtar (Foreign Key) (`user` tablosuna referans) |
| adres         | TEXT       | Kullanıcı adresi                         |
| sehir         | VARCHAR    | Kullanıcının yaşadığı şehir               |
| il            | VARCHAR    | Kullanıcının yaşadığı il (bölge/provins)  |
| hakkinda      | TEXT       | Kullanıcı hakkında bilgi                  |
| telefon       | VARCHAR    | Kullanıcı telefon numarası                |
| kayit_tarihi  | DATETIME   | Kullanıcının sisteme kayıt tarihi         |

### İlişki
Her iki tablo `user_id` sütunu üzerinden birbirine bağlıdır. Bu ilişki sayesinde kullanıcı bilgileri ve detay bilgileri birlikte tutulur.
