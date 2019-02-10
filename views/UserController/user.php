<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>
<?php include(dirname(__DIR__).'/navbar.php'); ?>


<div class="container user">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6 motto">
            <h1>Zmien swoje hasło</h1>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>


<div class="container main">
    <div class="row">
        <div class="col-12" style="float:left;">
            <form method="post" action="/views/AdvertController/changePassword.php">
                <div class="form-group">
                    <label for="oldpassword">Aktualne hasło</label>
                    <input type="password" class="form-control" id="oldpassword" name="oldpassword" aria-describedby="oldpassword" placeholder="Aktualne hasło" required>

                </div>
                <div class="form-group">
                    <label for="newpassword">Nowe hasło</label>
                    <input type="password" class="form-control" id="newpassword" name="newpassword" aria-describedby="newpassword" placeholder="Nowe hasło" required>

                </div>
                <div class="form-group">
                    <label for="newpassword2">Powtórz hasło</label>
                    <input type="password" class="form-control" id="newpassword2" name="newpassword2" aria-describedby="newpassword2" placeholder="Powtórz hasło" required>

                </div>
                <button type="submit" class="btn btn-primary">Zmień hasło</button>
            </form>


        </div>







    </div>
</div>

</body>
</html>