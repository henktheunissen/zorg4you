
function verwijderen(id, type, col){
    $.post(
        "inc/functions.php",
        {
            id: id,
            handle: "verwijderen",
            type: type,
            col: col
        },
        function(data) {
            if(data == 200) {
                location.reload();
            } else {
                alert("Error: " + data);
            }
        }
    );
}

function showWerknemerForm(werknemer = null){
    $('#type').val("werknemer");
    if(werknemer != null) {
        $('#form-type').val("wijzigen:" + werknemer[0]);
        $('#submit').val("Wijzigen");

        $('#voornaam').val(werknemer[1]);
        $('#tussenvoegsel').val(werknemer[2]);
        $('#achternaam').val(werknemer[3]);
        $('#straatnaam').val(werknemer[4]);
        $('#huisnummer').val(werknemer[5]);
        $('#toevoeging').val(werknemer[6]);
        $('#postcode').val(werknemer[7]);
        $('#plaats').val(werknemer[8]);

        $('#werknemer-form').removeClass('hidden');
    } else {
        $('#form-type').val("toevoegen");
        $('#submit').val("Toevoegen");

        $('#werknemer-form').removeClass('hidden');
    }
}

function showKlantForm(klant = null){
    $('#type').val("klant");
    if(klant != null) {
        $('#form-type').val("wijzigen:" + klant[0]);
        $('#submit').val("Wijzigen");

        $('#voornaam').val(klant[1]);
        $('#tussenvoegsel').val(klant[2]);
        $('#achternaam').val(klant[3]);
        $('#straatnaam').val(klant[4]);
        $('#huisnummer').val(klant[5]);
        $('#toevoeging').val(klant[6]);
        $('#postcode').val(klant[7]);
        $('#plaats').val(klant[8]);

        $('#klant-form').removeClass('hidden');
    } else {
        $('#form-type').val("toevoegen");
        $('#submit').val("Toevoegen");

        $('#klant-form').removeClass('hidden');
    }
}

function showWerksoortForm(werksoort = null){
    $('#type').val("werksoort");
    if(werksoort != null) {
        $('#form-type').val("wijzigen:" + werksoort[0]);
        $('#submit').val("Wijzigen");

        $('#voornaam').val(werksoort[1]);
        $('#tussenvoegsel').val(werksoort[2]);
        $('#achternaam').val(werksoort[3]);
        $('#straatnaam').val(werksoort[4]);
        $('#huisnummer').val(werksoort[5]);
        $('#toevoeging').val(werksoort[6]);
        $('#postcode').val(werksoort[7]);
        $('#plaats').val(werksoort[8]);

        $('#werksoort-form').removeClass('hidden');
    } else {
        $('#form-type').val("toevoegen");
        $('#submit').val("Toevoegen");

        $('#werksoort-form').removeClass('hidden');
    }
}
