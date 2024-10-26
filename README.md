# Eklenen URL'yi Hemen Yönlenmeden 10sn Reklam Gösterme - PHP
Arkadaşlar merhaba;
Basit şekilde hazırlanmış ama etkili bir PHP kodlama paylaşıyorum. İstediğiniz sisteme çok kolaylıkla ufak dokunuşlar ile entegre edebilirsiniz.
Amaç Eklediğiniz linke direkt yönlendirmeden önce https://siteadiniz.com/yonlendir.php sayfasına gidecek 10 saniye boyunca ister reklam gösterebileceksiniz.
Örnek yönlendirme Adresi: https://siteadiniz.com/yonlendir.php?url=google.com.tr

index.php ve panel.php dosyalarının içerisinde ki ilgili satırı mysql veritabanınıza göre ayarlamayı unutmayın..!

        // Veritabanına bağlantı ekleme
        $pdo = new PDO('mysql:host=localhost;dbname=sizin-db-adiniz', 'kullanici-adi', 'sifre');

        
