<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="20">
    <link rel="stylesheet" href="css/degerler2.css">
    <title>Hidroist Hucre Gerilimi</title>
</head>
<body>
    <header>
        <div id="logo"><a href="anasayfa.html"><img src="images/logo.png" title="Hidroist"></a></div>
    </header>
    <hr style=" width: 98%;">
    <h1>Hücre Gerilimi</h1>
    <main>
        <p style="color:rgb(72,118,255);">İsim</p>
        <p style="color:rgb(72,118,255);">Değer</p>
        <p style="color:rgb(72,118,255);">Tarih</p>
        <?php
            $baglanti=mysqli_connect("localhost","Merve","merve1998coban","HIDROIST");
            $gonder=mysqli_query($baglanti,"SELECT * FROM HucreGerilim");
            while($satir=mysqli_fetch_assoc($gonder)){ 
                $deger=$satir["deger"]; 
                $tarih=$satir["tarih"];
                $isim=$satir["isim"];
        ?>
                <p><?php echo($isim); ?></p>
                <p><?php echo($deger); ?></p>
                <p><?php echo($tarih); ?></p>   
        <?php
            }
        ?>
        <p style="border:none;"></p>
    </main>
    <hr style=" width: 98%;">
</body>
</html>