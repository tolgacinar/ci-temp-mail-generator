# ci-temp-mail-generator

## Geçici e-posta kutuları servisi (kullan-at e-posta adresi) 

Bu yazılım GNU AFFERO GENERAL PUBLIC LICENSE ile korunmaktadır. Yazılımı açık kaynak olarak tekrar yayınlayabilir, ticari olarak satışa sunabilirsiniz.


***

## Özellikler

* Rastgele e-posta kutuları oluşturur. 
* Yeni e-posta bildirimleri. E-posta indirme özelliği.
* Bu yazılım catch-all sistemi kullanır, [google: catch-all mail boxes](https://www.google.com.tr/search?q=how+to+setup+catch-all+imap+mailbox).
* PHP 7.2 ve üzeri php versiyonlarıyla çalışmanız önerilir, diğer sürümler ile test edilmedi. [PHP Websitesi: IMAP Eklentisi](http://php.net/manual/book.imap.php)

## Gereksinimler
* PHP 7.2 veya üzeri (Yalnızca 7.2 sürümünde çalıştırıldı).
* Composer

***

## Kurulum
* Reponun en güncel halini klonlayın.
* Klon alınna dizinde **"composer install"** komutunu çalıştırıp dosyaların yüklenmesini bekleyin.
* **"application/config"** klasöründeki **database.example.php** ve **temp_email.example.php** dosyalarını "example" olmayacak şekilde kopyalayın (database.php, temp_email.php) ve konfigrasyonları kendinize göre düzenleyin.
* Bu yazılım **catch-all** sistemi ile birlikte çalışmaktadır, alan adınıza gelen bütün epostaları **temp_email.php** içerisinde ayarladığımız e-posta adresine yönlenecek şekilde düzenleyin.

**ARTIK KULLANMAYA HAZIRSINIZ**

Devam edilecek...