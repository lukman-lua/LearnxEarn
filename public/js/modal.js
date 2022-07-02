let mata = document.querySelector(".mata"),
    mataInput = document.querySelector(".mataInput"),
    mata2 = document.querySelector(".mata2"),
    mata2Input = document.querySelector(".mata2Input"),
    mata3 = document.querySelector(".mata3"),
    mata3Input = document.querySelector(".mata3Input")

mata.onclick = () =>{
    if(mata.className == "bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata"){
        mata.classList.replace("bx-show", "bx-hide")
        mataInput.type = "text"
    }else if(mata.className == "bx bx-hide position-absolute top-50 end-0 translate-middle fs-4 mata"){
        mata.classList.replace("bx-hide", "bx-show")
        mataInput.type = "password"
    }
}

mata2.onclick = () =>{
    if(mata2.className == "bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata2"){
        mata2.classList.replace("bx-show", "bx-hide")
        mata2Input.type = "text"
    }else if(mata2.className == "bx bx-hide position-absolute top-50 end-0 translate-middle fs-4 mata2"){
        mata2.classList.replace("bx-hide", "bx-show")
        mata2Input.type = "password"
    }
}

mata3.onclick = () =>{
    if(mata3.className == "bx bx-show position-absolute top-50 end-0 translate-middle fs-4 mata3"){
        mata3.classList.replace("bx-show", "bx-hide")
        mata3Input.type = "text"
    }else if(mata3.className == "bx bx-hide position-absolute top-50 end-0 translate-middle fs-4 mata3"){
        mata3.classList.replace("bx-hide", "bx-show")
        mata3Input.type = "password"
    }
}