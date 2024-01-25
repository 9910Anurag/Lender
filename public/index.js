let burger = document.querySelector('.burger');
let navli = document.querySelector('.nav-li');
burger.addEventListener('click', ()=>{
   navli.classList.toggle('navliresp');
   navli.classList.toggle('');
});
let image = document.getElementById('image');
        let images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg']
        setInterval(function(){
            let random = Math.floor(Math.random() * 4);
            image.src= images [random];
        }, 800);       