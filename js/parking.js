const parkingModal = document.getElementById("parkingModal");
const modalParking = document.querySelector(".modalParking");
const estacionamientoBtns = document.querySelectorAll(".cardEstacionamiento__btns");
const btnEliminar = document.getElementById("btnEliminar");

console.log(parkingModal)

parkingModal.addEventListener("click", (e) => {
    modalParking.style.display = "block";
    modalParking.innerHTML = `    
    <div class="d-flex justify-content-center">
        <div class="modal__container">
            <div class="d-flex justify-content-end mx-auto" style="width: 90%">
                <button type="button" class="cerrarModal" >X</button>
            </div>
            <div> 
                <h2 class="text-center">Agregando nuevo Parking</h2>
                <form method="post" action="addEstacionamiento">
                    <div class="form-group w-75 mx-auto">
                        <input type="number" min="0" name="estacionamiento" class="form-control mb-2 fs-3"   placeholder="Ingresa un numero de estacionamiento">
                        <small class="form-text text-muted textoMuted">Tene en cuenta que este numero debe ser unico!</small>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-75 fs-4 ">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        `;
})


document.addEventListener("click", (e) => {
    if (e.target.matches(".cerrarModal")) {
        modalParking.style.display = "none";
    }
})


btnEliminar.addEventListener("click", (e) => {
    console.log("click")
    if(btnEliminar.classList.contains('activo')){
        estacionamientoBtns.forEach(btn => {
            btn.style.display = "flex";
        })
        btnEliminar.classList.remove('activo')
    }else{
        estacionamientoBtns.forEach(btn => {
            btn.style.display = "none";
        })
        btnEliminar.classList.add('activo')


    }
    
})