const musik = document.querySelector('#kotak-musik');
   musik.style.display = 'block';

   const lagu = document.querySelector('#lagu');
   lagu.play();

function putarLagu() {
    const lagu =document.querySelector('#lagu');
    const tombol = document.querySelector('#kontrol');

    if(lagu.paused){
        lagu.play();
        tombol.src='Assets/-img/—Pngtree—sound waves equalizer audio radio_9070974 (1).png';
    }else{
        lagu.pause(); 
        tombol.src="Assets/-img/—Pngtree—mute icon isolated on abstract_5068446.png";
    }
}