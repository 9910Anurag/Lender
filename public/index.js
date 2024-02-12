let burger = document.querySelector('#burger');
let navli = document.querySelector('.nav-li');
let close = document.querySelector('#togglebtn');
burger.addEventListener('click', ()=>{
navli.classList.toggle('navliresp');
if(close.src.match('menu.png')){
console.log('click1');
close.src='x-lg.svg';
}
else{
console.log('clik2');
close.src='menu.png';
}
});
let image = document.getElementById('image');
        let images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg']
        setInterval(function(){
            let random = Math.floor(Math.random() * 4);
            image.src= images [random];
        }, 800);       