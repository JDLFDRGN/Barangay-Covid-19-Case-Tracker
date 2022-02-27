let insertData = document.querySelector('#home-insert');
let table = document.querySelector('#home-table');
let total = document.querySelector('#home-total');

insertData.addEventListener('click',()=>{
    window.location.href = "insert.php";
});

table.addEventListener('click',()=>{
    window.location.href = "table.php";
});

total.addEventListener('click',()=>{
    window.location.href = "total.php";
});