<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>
<?php include(dirname(__DIR__).'/navbar.html'); ?>


<div class="container header">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6 motto">
            <h1>Znajdz odpowiednia osobe na odpowiednie miejsce.</h1>
            <a href="?page=add_advert"><button onclick="" class="button-primary">Dodaj ogłoszenie</button></a>
            <h1>Szukasz zlecenia dla siebie?</h1>
            <a href="?page=search&category=building"><button onclick="" class="button-primary">Przeglądaj oferty</button></a>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>


<div class="container main">
    <div class="row">
        <div class="col-12" style="float:left;">
            <div class="icon">
                <p>Budownictwo</p>
                <a href="?page=search&category=building"><i class="fas fa-hammer" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Transport</p>
                <a href="?page=search&category=transport"><i class="fas fa-truck-moving" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Programowanie</p>
                <a href="?page=search&category=programming"><i class="fas fa-code" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Korepetycje</p>
                <a href="?page=search&category=education"><i class="fas fa-user-graduate" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Muzyka</p>
                <a href="?page=search&category=music"><i class="fas fa-guitar" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Pomoc domowa</p>
                <a href="?page=search&category=home"><i class="fas fa-home" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Fotografia</p>
                <a href="?page=search&category=photo"><i class="fas fa-camera-retro" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Prawo</p>
                <a href="?page=search&category=law"><i class="fas fa-gavel" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Księgowość</p>
                <a href="?page=search&category=accounting"><i class="fas fa-calculator" style="font-size: 30px;"></i></a>
            </div>
            <div class="icon">
                <p>Marketing</p>
                <a href="?page=search&category=marketing"><i class="fas fa-comments-dollar" style="font-size: 30px;"></i></a>
            </div>


        </div>







    </div>
</div>

</body>
</html>