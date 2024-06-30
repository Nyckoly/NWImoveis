// const icons1 = document.querySelector(".compra .icone");
const icons1 = document.querySelector(".compra");
const icons2 = document.querySelector(".select");
const select1 = document.querySelector("#tipo");
const select2 = document.querySelector("#tiporesidencia");
const icone1 = document.createElement("div");
icone1.classList.add("icone")
const icone2 = document.createElement("div");
icone2.classList.add("icone")


select1.addEventListener("change", (event) => {
    icons1.insertBefore(icone1, select1)
    if (event.target.value == "aluguel"){
        
        icone1.innerHTML = "<i class='fa-solid fa-tag animate__animated animate__fadeIn'></i>"
    }
    else if (event.target.value == "venda"){
        
        icone1.innerHTML = "<i class='fa-solid fa-sack-dollar animate__animated animate__fadeIn'></i>"
    }
})

select2.addEventListener("change", (event) => {
    icons2.prepend(icone2)
    icons2.removeChild(icone2)
        
    if (event.target.value == "casa"){
        icons2.prepend(icone2)
        icone2.innerHTML = "<i class='fa-solid fa-house animate__animated animate__fadeIn'></i>"
    }
    else if (event.target.value == "apartamento"){
        icons2.prepend(icone2)
        icone2.innerHTML = "<i class='fa-solid fa-building animate__animated animate__fadeIn'></i>"
    }
    else if (event.target.value == "terreno"){
        icons2.prepend(icone2)
        icone2.innerHTML = "<i class='fa-solid fa-hammer animate__animated animate__fadeIn'></i>"
    }
})
