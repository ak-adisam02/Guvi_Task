$(document).on('submit','#registrationForm',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "php-script.php",
    data:$(this).serialize(),
    success: function(data){
    $('#msg').html(data);
    $('#registrationForm').find('input').val('')

}});
});