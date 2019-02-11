<?php

$role = $user->getRole();

if($role != '2')
{
    echo "Brak uprawnień";
    exit();
}

?>


<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body onload="adminStart()">
<div class="container">
    <div class="row">
        <h4 class="mt-4">Użytkownicy</h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Rola</th>
                <th>Akcja</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?= $user->getName(); ?></td>
                <td><?= $user->getSurname(); ?></td>
                <td><?= $user->getEmail(); ?></td>
                <td><?= $user->getRole(); ?></td>
                <td>-</td>
            </tr>
            </tbody>
            <tbody class="users-list">
            </tbody>
        </table>

    </div>
    <div class="row">
        <h4 class="mt-4">Ogłoszenia</h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dodający</th>
                <th>Tytuł</th>
                <th>Cena</th>
                <th>Data</th>
                <th>Akcja</th>
            </tr>
            </thead>

            <tbody class="advert-list">
            </tbody>
        </table>

    </div>
</div>

</body>
</html>