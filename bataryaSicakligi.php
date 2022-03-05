<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="20"> <!--sayfa 20sn aralıklarla yenileniyor-->
    <title>Hidroist Batarya Sıcaklığı</title>
    <style>
        body{
    background-color:black;
    padding: 1%; 
}

header{
    z-index: 2; 
    background-color:black;
    width: 98%;
    height: 3.5em;
    position:sticky;
    top: 0;
}

#logo{
    width: 20%;
    height: 100%;
}

#logo img{
    width: 45px ;
    height: 45px;
    margin-left: 40%;
    margin-top: 2%;
}

main{
    width: 60%;
    height: auto;
    margin: auto;
    margin-bottom: 10%;
    margin-top: 3%;  
}

main p{
    border:1px solid #04365f; 
    display: block;
    float: left;
    width: 42%;
    height: 30px;
    text-align: center;
    letter-spacing: 0.4px;
    font-size: 12px;
    color: #D6D6D6;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin:0;
    padding-top: 2%;
}

h1{
    letter-spacing: 0.4px;
    font-size: 18px;
    color: rgb(72,118,255);
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin-top: 5%;
    margin-left: 42%;
}
/*********************************/
@media (max-width:580px){
    main{
        padding-left: 5%;
        width: 100%;
    }

    h1{
        font-size: 14px;
        margin-top: 10%;
        margin-left: 35%;
    }

    main p{
        width: 44%; 
        font-size: 10px;
        padding-top: 3%;
    }
}

@media (max-width:760px) and (min-width:580px){
    main{
        padding-left: 7%;
        width: 100%;
    }

    h1{
        font-size: 14px;
        margin-top: 10%;
        margin-left: 40%;
    }
}

@media (max-width:1060px) and (min-width:760px){
    main{
        padding-left: 10%;
        width: 90%;
    }

    h1{
        font-size: 15px;
        margin-top: 10%;
        margin-left: 40%;
    }
}
    </style>
</head>
<body>
    <header>
        <div id="logo"><a href="anasayfa.html"><img src="images/logo.png" title="Hidroist"></a></div>
    </header>
    <hr style=" width: 98%;">
    <h1>Batarya Sıcaklığı</h1>
    <main>
        <p style="color:rgb(72,118,255);">Değer</p>
        <p style="color:rgb(72,118,255);">Tarih</p>
        <?php
            $baglanti=mysqli_connect("localhost","Merve","merve1998coban","HIDROIST");
            $gonder=mysqli_query($baglanti,"SELECT * FROM BataryaSicakligi");
            while($satir=mysqli_fetch_assoc($gonder)){ 
                $deger=$satir["deger"]; 
                $tarih=$satir["tarih"];
        ?>
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