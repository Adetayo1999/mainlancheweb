const menu = document.querySelector('#menu');
const burger = document.querySelector('#burger');

burger.addEventListener('click', () => {
    if(menu.classList.contains('hidden')) {
        menu.classList.remove('hidden')
    }else {
        menu.classList.add('hidden')
    }
});

// terget the submit btn in the contact us page

submitBtn = document.querySelector('#submitBtn');

submitBtn.addEventListener('click', function(e){
    e.preventDefault()
})


// target the submit btn in the book our services page
subBtn = document.querySelector('#subBtn');

subBtn.addEventListener('click', function(e){
    e.preventDefault()
})

// alert('hdhdjkdk')