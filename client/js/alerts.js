
const notLogin = () =>{
    Swal.fire({
        title: 'You are not logged in',
        text: 'Please login first!',
        icon: 'error',
        confirmButtonText: 'Ok'
      }).then(function() {
        window.location = "login.php";
    });
      
}
