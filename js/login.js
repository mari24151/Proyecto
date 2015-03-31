/**
 * Created by Alexa Rodriguez on 21/03/2015.
 */
$(document).ready(function () {

    login();

});

function login() {

    $("#form-login").submit(function (event) {

        event.preventDefault();


        var url = this.action;
        var datos = $(this).serialize();

        $.post(url, datos).done(function (msg) {

            alert(msg);
        });

    });


}