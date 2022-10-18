const parkingModal = document.getElementById("parkingModal");
const modalHome = document.querySelector(".modalHome");
const modalCliente = document.querySelector(".modalCliente");
const modalAuto = document.querySelector(".modalAuto");
const btnFue = document.querySelectorAll(".btnFue")

parkingModal.addEventListener("click", () => {
    modalHome.style.display = "flex";
    modalHome.style.justifyContent = "center";
    modalHome.style.marginBottom = "1rem";

})


document.addEventListener("click", (e) => {
    if(e.target.classList.contains("clienteAdd")) {
        modalHome.style.display = "none";
        modalCliente.style.display = "flex";

    }
})

document.addEventListener("click", (e) => {
    if(e.target.classList.contains("autoAdd")) {
        modalHome.style.display = "none";
        modalAuto.style.display = "flex";

    }
})

document.addEventListener("click", (e) => {
    if(e.target.classList.contains("cerrarModalHome")){
        modalHome.style.display = "none";
    }
})

document.addEventListener("click", (e) => {
    if(e.target.classList.contains("cerrarModalCliente")){
        modalCliente.style.display = "none";
    }
})

document.addEventListener("click", (e) => {
    if(e.target.classList.contains("cerrarModalAuto")){
        modalAuto.style.display = "none";
    }

})

btnFue.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        console.log(e.target.value)
        Swal.fire({
            title: '¿Este vehiculo realmente se ha ido?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            width: 600,
            cancelButtonColor: '#d33',
            cancelButtonText: 'No se fue',
            confirmButtonText: 'Si se fue'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Base de datos actualizada',
                'Se ha abierto de nuevo el estacionamiento. Espere 3 segundos y sera redireccionado',
                'success'

              )
                setTimeout(() => {
                    window.location.href = "autosFue/"+e.target.value;
                }, 3000);
            }
          })
        })
})