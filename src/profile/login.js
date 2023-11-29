$(document).on('submit','#loginForm',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "login.php",
    data:$(this).serialize(),
    success: function(data){
   
    if(data === 'success') {
        window.location.href="dashboard.php";
    } else {
        $('#msg').html(data);
        $('#loginForm').find('input').val('')
    }
     
}});
});