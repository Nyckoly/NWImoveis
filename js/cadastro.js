const icons1 = document.querySelector(".compra .icone");
const icons2 = document.querySelector(".select");
const select1 = document.querySelector("#tipo");
const select2 = document.querySelector("#tiporesidencia");
const icone = document.createElement("div");
icone.classList.add("icone")


select1.addEventListener("change", (event) => {
    if (event.target.value == "aluguel"){
        icons1.innerHTML = "<i class='fa-solid fa-tag'></i>"
    }
    else if (event.target.value == "venda"){
        icons1.innerHTML = "<i class='fa-solid fa-sack-dollar'></i>"
    }
})

select2.addEventListener("change", (event) => {
    icons2.prepend(icone)
    icons2.removeChild(icone)
        
    if (event.target.value == "casa"){
        icons2.prepend(icone)
        icone.innerHTML = "<i class='fa-solid fa-house'></i>"
    }
    else if (event.target.value == "apartamento"){
        icons2.prepend(icone)
        icone.innerHTML = "<i class='fa-solid fa-building'></i>"
    }
    else if (event.target.value == "terreno"){
        icons2.prepend(icone)
        icone.innerHTML = "<i class='fa-solid fa-hammer'></i>"
    }
})
