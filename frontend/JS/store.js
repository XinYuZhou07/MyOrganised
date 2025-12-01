let buttonW = document.querySelector(".w")
let buttonA = document.querySelector(".a")
let buttonS = document.querySelector(".s")
let buttonD = document.querySelector(".d")
let buttonJ = document.querySelector(".j")
let buttonK = document.querySelector(".k")
let buttonL = document.querySelector(".l")

buttonW.addEventListener("click", function(){
    var tmp = new Audio("sounds/tom-1.mp3")
    tmp.play()
})
buttonA.addEventListener("click", function(){
    var tmp = new Audio("sounds/tom-2.mp3")
    tmp.play()
})
buttonS.addEventListener("click", function(){
    var tmp = new Audio("sounds/tom-3.mp3")
    tmp.play()
})
buttonD.addEventListener("click", function(){
    var tmp = new Audio("sounds/tom-4.mp3")
    tmp.play()
})
buttonJ.addEventListener("click", function(){
    var tmp = new Audio("sounds/crash.mp3")
    tmp.play()
})
buttonK.addEventListener("click", function(){
    var tmp = new Audio("sounds/kick-bass.mp3")
    tmp.play()
})
buttonL.addEventListener("click", function(){
    var tmp = new Audio("sounds/snare.mp3")
    tmp.play()
})

//let numberOfBtn = document.querySelector(".drum")


buttonW.addEventListener("click", suono("tom-1.mp3"))


function suono(event){
    var suono = new Audio("sounds/"+event)
    suono.play()
}
