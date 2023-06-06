let msg = "Hello Word";

function hello(){
    msg = "no any thisgs"
    alert(msg);
}

let el = document.querySelector('h1 i');
el.onclick = function(){
    hello();
    el.style.color = "red";
    el.style.backgroundColor = "#fff";

};

let input = document.querySelector('[placeholder="Name"]');
// input.onkeyup
input.addEventListener('keyup',function(){
    // el.textContent = input.value;
    el.innerHTML = "<b>" +input.value +"</b>" ; 
})

let form = document.querySelector('#contact-form');
let txtarea = document.querySelector('textarea');
let err = document.querySelector('.error');

form.addEventListener('submit',function(event){

    if(txtarea.value  ===''){
        event.preventDefault();
        err.classList.remove('hide');
        return;
    }
});

txtarea.onkeyup = () => err.classList.add('hide');
