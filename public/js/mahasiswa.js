let boxSatu = document.querySelector(".boxSatu"),
    boxDua = document.querySelector(".boxDua"),
    boxTiga = document.querySelector(".boxTiga")

if(boxSatu.clientHeight > boxDua.clientHeight){
    boxSatu.style.height = `${boxDua.clientHeight}px`
    boxSatu.classList.add("overflow-auto")
}
if(boxTiga.clientHeight > boxDua.clientHeight){
    boxTiga.style.height = `${boxDua.clientHeight}px`
}

let doxSatu = document.querySelector(".doxSatu"),
    doxDua = document.querySelector(".doxDua"),
    doxTiga = document.querySelector(".doxTiga")

if(doxSatu.clientHeight > doxDua.clientHeight){
    doxSatu.style.height = `${doxDua.clientHeight}px`
    doxSatu.classList.add("overflow-auto")
}
if(doxTiga.clientHeight > doxDua.clientHeight){
    doxTiga.style.height = `${doxDua.clientHeight}px`
}
