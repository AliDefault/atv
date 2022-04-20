let user_before = document.getElementById('user_before')
let user_after = document.getElementById('user_after')
let menu = document.getElementById('user_menu')
user_before.addEventListener('click', clicar)
user_after.addEventListener('click', reclicar)
function clicar(){
    menu.style.display = 'block';
    user_before.style.display = 'none';
    user_after.style.display = 'block';
}
function reclicar(){
    menu.style.display = 'none';
    user_before.style.display = 'block';
    user_after.style.display = 'none';
}