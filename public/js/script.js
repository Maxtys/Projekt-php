$(document).ready(function(){
    $('.panel-header').html('SIGN IN');
});



function getUsers() {
    const apiUrl = "http://localhost";
    const $list = $('.users-list');

    $.ajax({
        url : apiUrl + '/?page=admin_users',
        dataType : 'json'
    })
        .done((res) => {

            $list.empty();
            //robimy pętlę po zwróconej kolekcji
            //dołączając do tabeli kolejne wiersze
            res.forEach(el => {
                $list.append(`<tr>
                    <td>${el.name}</td>
                    <td>${el.surname}</td>
                    <td>${el.email}</td>
                    <td>${el.role}</td>
                    <td>
                    <button class="btn btn-danger" type="button" onclick="deleteUser(${el.id})">
                        <i class="material-icons">delete_forever</i>
                    </button>
                    </td>
                    </tr>`);
            })
        });
}


function getAdvertsByCategory(idCategory) {
    const apiUrl = "http://localhost";
    const $list = $('.advert-list');

    $.ajax({
        url : apiUrl + '/?page=advert_list',
        dataType : 'json',
        success: function(res)
        {
            $list.empty();
            var flag = 0;
            for(i in res)
            {


                if(res[i].idCategory == idCategory)
                {
                    flag = 1;
                    $list.append(`<tr>
                        <td><a href='?page=advert&id=${res[i].id}'>${res[i].title}</a></td>
                        <td>${res[i].price} zł</td>
                        <td>${res[i].date}</td>
                        </tr>`);
                }


            }
            if(flag == 0)
            {
                $list.append(`<tr>
                        <td colspan="3">Niestety brak ogłoszeń w tej kategorii</td>
                        </tr>`);
            }

        },
        error: function () {
            $list.append(`<tr>
                        <td colspan="3">Niestety brak ogłoszeń w tej kategorii</td>
                        </tr>`);
        }
    });
}
function adminStart()
{
    getAdvertsAdmin();
    getUsers();
}
function getAdvertsAdmin() {
    const apiUrl = "http://localhost";
    const $list = $('.advert-list');

    $.ajax({
        url : apiUrl + '/?page=advert_list',
        dataType : 'json',
        success: function(res)
        {
            $list.empty();
            var flag = 0;
            for(i in res)
            {
                $list.append(`<tr>
                        <td>${res[i].id}</td>
                        <td>${res[i].idUser}</td>
                        <td><a href='?page=advert&id=${res[i].id}'>${res[i].title}</a></td>
                        <td>${res[i].price} zł</td>
                        <td>${res[i].date}</td>
                        <td><button class="btn btn-danger" type="button" onclick="deleteAdvert(${res[i].id})">
                        <i class="material-icons">delete_forever</i>
                    </button></td>
                        </tr>`);

            }


        },
        error: function () {
            $list.append(`<tr>
                        <td colspan="3">Niestety brak ogłoszeń w tej kategorii</td>
                        </tr>`);
        }
    });
}




function getAdvertsById(id) {
    const apiUrl = "http://localhost";
    const $title = $('.title');
    const $description = $('.description');
    const $author = $('.author');
    const $price = $('.price');
    const $date = $('.date');

    $.ajax({
        url : apiUrl + '/?page=advert_list',
        dataType : 'json',
        success: function(res)
        {
            $title.empty();
            $description.empty();
            $author.empty();
            for(i in res)
            {


                if(res[i].id == id)
                {
                    $title.append(res[i].title);
                    $description.append(res[i].description);
                    $price.append(res[i].price + ' zł');
                    $date.append('Data: '+res[i].date);
                    $author.append(res[i].idUser);
                }

            }
        },
        error: function () {
            alert("No");
        }
    });
}
function getAdvertsByUser(user) {
    const apiUrl = "http://localhost";
    const $list = $('.advert-list');

    $.ajax({
        url : apiUrl + '/?page=advert_list',
        dataType : 'json',
        success: function(res)
        {
            $list.empty();
            var flag = 0;
            for(i in res)
            {


                if(res[i].idUser == user)
                {
                    flag = 1;

                    switch(res[i].idCategory)
                    {
                        case 'building':
                            category = 'Budownictwo';
                            break;
                        case 'transport':
                            category = 'Transport';
                            break;
                        case 'programming':
                            category = 'Programowanie';
                            break;
                        case 'education':
                            category = 'Korepetycje';
                            break;
                        case 'music':
                            category = 'Muzyka';
                            break;
                        case 'home':
                            category = 'Pomoc domowa';
                            break;
                        case 'photo':
                            category = 'Fotografia';
                            break;
                        case 'law':
                            category = 'Prawo';
                            break;
                        case 'accounting':
                            category = 'Księgowość';
                            break;
                        case 'marketing':
                            category = 'Marketing';
                            break;
                    }



                    $list.append(`<tr>
                        <td>${category}</td>
                        <td><a href='?page=advert&id=${res[i].id}'>${res[i].title}</a></td>
                        <td>${res[i].price} zł</td>
                        <td>${res[i].date}</td>
                        </tr>`);
                }


            }
            if(flag == 0)
            {
                $list.append(`<tr>
                        <td colspan="3">Niestety brak ogłoszeń w tej kategorii</td>
                        </tr>`);
            }

        },
        error: function () {
            $list.append(`<tr>
                        <td colspan="3">Niestety brak ogłoszeń w tej kategorii</td>
                        </tr>`);
        }
    });
}




function deleteUser(id) {
    if (!confirm('Chcesz usunąć tego użytkownika?')) {
        return;
    }

    const apiUrl = "http://localhost";

    $.ajax({
        url : apiUrl + '/?page=admin_delete_user',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Pomyslnie usunięto z bazy!');
            getUsers();
        }
    });
}
function deleteAdvert(id) {
    if (!confirm('Chcesz usunąć to ogłoszenie?')) {
        return;
    }

    const apiUrl = "http://localhost";

    $.ajax({
        url : apiUrl + '/?page=admin_delete_advert',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Pomyslnie usunięto z bazy!');
            getAdvertsAdmin();
        }
    });
}
