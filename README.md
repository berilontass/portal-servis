<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>Servis Modülü</h1>
<h3>KURULUM</h3>
<P>Servis modülünü eklemek için portal klasöründeki composer.json dosyasına giderek repositories kısmına aşağıdaki kod parçasını eklemeliyiz..</p>
<pre>
<code>
....
"repositories": [
    {
        ....
{
        "type": "vcs",
        "url": "https://github.com/berilontass/portal-servis.git"
}
                ]
</code>
</pre>
<p>Migration için komut:</p>
<pre>
<code>
"  php yii migrate --migrationPath=@vendor/kouosl/portal-servis/migrations  "
</code>
</pre>
<p>Bu adımlardan sonra komut satırında portal dizinine giderek vagrant up ile makineyi ayağa kaldırdıktan sonra ssh ile bağlantı kurmalıyız. Buradan cd /var/www/portal dizinine giderek aşağıdaki komutu yazmalıyız.
    <pre>
<code>
composer update
</code>
</pre>
    
<h3>ADRESLER</h3>
<h6>MODÜL:</h6>
http://portal.kouosl/servis
<h6>MODEL:</h6>
http://portal.kouosl/servis/servis
<h3>SAYFA HAKKINDA</h3>
  <p> Panel açıldığında servise kayıt olmak isteyenler için kayıt olma bölümü bulunmaktadır. 
<p>Aynı zamanda servisin saat ve durak bilgileri listelenir.
    <p>Yönetici kısmında kayıtlı kişiler silinebilir, servis saat ve durak bilgilerinde değişiklikler yapılabilir.
</body>
</html>
