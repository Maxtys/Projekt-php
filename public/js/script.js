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
