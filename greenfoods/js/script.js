
 $('.tous').click(function() {
    $('.tous').focus();
    // L'URL du fichier dans lequel tu appelles ta fonction
    var url = 'bdd/type/functionType.php';
    $.post(url, function(data){
        // Tu affiches le contenu dans ta div
        $('.typeProduit').html(data);
    });
});
$('.tous').trigger("click");


$('.legumes').click(function() {
    $('.legumes').focus();
    // L'URL du fichier dans lequel tu appelles ta fonction
    var url = 'bdd/type/functionTypeLegume.php';
    $.post(url, function(data){
        // Tu affiches le contenu dans ta div
        $('.typeProduit').html(data);
    });
});

$('.fruits').click(function() {
    $('.fruits').focus();
    // L'URL du fichier dans lequel tu appelles ta fonction
    var url = 'bdd/type/functionTypeFruit.php';
    $.post(url, function(data){
        // Tu affiches le contenu dans ta div
        $('.typeProduit').html(data);
    });
});

$('.jus').click(function() {
    $('.jus').focus();
    // L'URL du fichier dans lequel tu appelles ta fonction
    var url = 'bdd/type/functionTypeJus.php';
    $.post(url, function(data){
        // Tu affiches le contenu dans ta div
        $('.typeProduit').html(data);
    });
});

$('.graines').click(function() {
    $('.graines').focus();
    // L'URL du fichier dans lequel tu appelles ta fonction
    var url = 'bdd/type/functionTypeGraine.php';
    $.post(url, function(data){
        // Tu affiches le contenu dans ta div
        $('.typeProduit').html(data);
    });
});

$('.affModal').trigger('click');

