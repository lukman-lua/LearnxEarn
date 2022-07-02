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