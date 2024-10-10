-------------------------
Veritabanı Adı: e-ticaret
-------------------------


Tablo 1: user
--------------------------------------------------------------
Sütun Adı	    Veri Tipi	    Açıklama
--------------------------------------------------------------
user_id	        INT	            Birincil anahtar (Primary Key)
username	    VARCHAR	        Kullanıcı adı
email	        VARCHAR	        Kullanıcı e-posta adresi
password	    VARCHAR	        Kullanıcı şifresi

Tablo 2: user_detay
----------------------------------------------------------------------------------
Sütun Adı	|   Veri Tipi	 |  Açıklama
----------------------------------------------------------------------------------
user_id	        INT	            Dış anahtar (Foreign Key) (user tablosuna referans)
adres	        TEXT	        Kullanıcı adresi
sehir	        VARCHAR	        Kullanıcının yaşadığı şehir
il	            VARCHAR	        Kullanıcının yaşadığı il (bölge/provins)
hakkinda	    TEXT	        Kullanıcı hakkında bilgi
telefon	        VARCHAR	        Kullanıcı telefon numarası
kayit_tarihi    DATETIME	    Kullanıcının sisteme kayıt tarihi

----------------------------------------------------------
Bu iki tablo, user_id sütunu üzerinden birbirine bağlanır.
----------------------------------------------------------