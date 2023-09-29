import Swal from 'sweetalert2/dist/sweetalert2.js'

import 'sweetalert2/src/sweetalert2.scss'



const notLogin = () =>{
    Swal.fire({
        title: 'You are not logged in',
        text: 'Please login first!',
        icon: 'error',
        confirmButtonText: 'Ok'
      }).then(function() {
        window.location = "login.php";
    });
      
};

const wrongLogin = () =>{
  Swal.fire({
      title: 'Email or password is incorrect',
      text: 'Please Check your email or password input',
      icon: 'error',
      confirmButtonText: 'Ok'
    }).then(function() {
      window.location = "login.php";
  });
    
};

const correctLogin = () =>{
  Swal.fire({
      title: 'Email or password is incorrect',
      text: 'Please Check your email or password input',
      icon: 'success',
      confirmButtonText: 'Ok'
    }).then(function() {
      window.location = "index.php";
  });
    
};
