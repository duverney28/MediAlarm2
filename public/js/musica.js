

const playcancion= document.getElementsByClassName('play')
const stopcancion= document.getElementsByClassName('stop')
const volumen= document.querySelector('.volumen')

let audio

for(elemento of playcancion){

    elemento.addEventListener('click', function() {

        let cancion= this.getAttribute('id')
        audio= new Audio(`${asset_global}musica/${cancion}.mp3`)
        audio.play();

    })
}

for (elemento of stopcancion){

    elemento.addEventListener('click',function(){
    audio.pause();

})

}

volumen.addEventListener('click', function(){
    let vol = this.value
    audio.volume = vol
})

