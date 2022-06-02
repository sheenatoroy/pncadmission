function changeBg(){

    const images = [

    'url("img/ilovepnc.jpg")',
    'url("img/pnc1.jpg")',
    'url("img/pnc2.jpg")',
    ]

   const section = document.querySelector('section')
   const bg = images[Math.floor(Math.random() * images.length)];
   section.style.backgroundImage = bg;
}

    setInterval(changeBg, 2000);

