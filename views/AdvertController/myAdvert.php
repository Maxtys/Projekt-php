<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body onload="getAdvertsByUser('<?php echo $_SESSION['id']; ?>')">
<?php include(dirname(__DIR__).'/navbar.php'); ?>


<div class="container search">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6 motto">
            <h1>Ogłoszenia dodane przez Ciebie</h1>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>


<div class="container main">
    <div class="row">
        <div class="col-12" style="float:left;">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Kategoria</th>
                    <th>Tytuł</th>
                    <th>Cena</th>
                    <th>Data</th>
                </tr>
                </thead>

                <tbody class="advert-list">
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>