let login = document.querySelector('#login');
let username = document.querySelector('#username');
let password = document.querySelector('#password');
let insertData = document.querySelector('#home-insert');

login.addEventListener('submit',(e)=>{
    e.preventDefault()
    if(username.value == "username" && password.value == "password"){
        window.location.href = 'home.php';
    }else{
        alert('invalid username or password');
    }
});
