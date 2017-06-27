/**
 * Created by arku on 27.06.2017.
 */
console.log('hi')
$('input[type=submit]').on('click', function(e) {
    e.preventDefault();
    var name = $('input[name=name]').val();
    var email = $('input[name=email]').val();

   $.ajax({
        url: '/form-handler.php',
        method: 'POST',
        data: {
            parametr: 'asdasd',
            name: name,
            email: email
        }
   }).done(function() {
       // document.location = 'http://formwebinar/secret.pdf';
   }).fail(function(){
       $('form').html('ОШИБКА');
   });
});