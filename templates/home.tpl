{include file="header.tpl"}

<section class="d-flex" style="height: 100vh;">
    {include file="sidebar.tpl"}
    <div class="w-100">
        <button id="parkingModal" class="btsControll btn btn-success">Ingresar nuevo auto</button>
        <div class="cardHome__container">
        {if $autosAll}
            {foreach from=$autosAll item=autos}
                <div class="cardHome">
                    <div class="cardHome__img">
                        <div class="cardHome__btns">
                            <button>X</button>
                            <button value={$autos->id} class="btnFue">Se marcho</button>
                        </div>
                        <img src="./imagenes/parking.png" alt="">
                    </div>
                    <div class="cardHome__text">
                        <h2>Patente: {$autos->patente}</h2>
                        <h2>Hora de entrada: {$autos->entrada}</h2>
                        <h2>Estacionamiento: {$autos->estacionamiento}</h2>
                        {foreach from=$clientes item=cliente}
                            {if $cliente->id == $autos->cliente}
                                <h2>Cliente: {$cliente->nombre}</h2>
                            {/if}
                        {/foreach}

                    </div>
                </div>
            {/foreach}

                {else}
                    <h1>No hay autos</h1>
                {/if}

        </div>
    </div>
    {* MODAL HOME *}
    <div class="modalHome">
        <div class="d-flex justify-content-center">
            <div class="modal__container h-25 pb-4">
                <div class="d-flex justify-content-end mx-auto" style="width: 90%">
                    <button type="button" class="cerrarModal cerrarModalHome">X</button>
                </div>
                <div>
                    <h2 class="text-center mb-5">Agregando un auto nuevo</h2>
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-primary fs-4 clienteAdd">Agregar cliente</button>
                        <button class="btn btn-primary fs-4 autoAdd">Agregar auto</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {* MODAL CLIENTE *}
    <div class="modalCliente justify-content-center">
        <div class="modalCliente__container pb-4">
            <div class="d-flex justify-content-end mx-auto" style="width: 90%">
                <button type="button" class="cerrarModal cerrarModalCliente">X</button>
            </div>
            <div>
                <h2 class="text-center mb-5">Agregando un cliente nuevo</h2>
                <form method="post" action="addClient">
                    <div class="form-group w-75 mx-auto">
                        <input type="text" min="0" name="nombre" class="form-control mb-2 fs-3"
                            placeholder="Ingresa nombre de cliente">
                    </div>
                    <div class="form-group w-75 mx-auto">
                        <input type="number" min="0" name="telefono" class="form-control mb-2 fs-3"
                            placeholder="Ingresa un telefono">
                    </div>
                    <div class="form-group w-75 mx-auto">
                        <input type="number" min="0" name="dni" class="form-control mb-2 fs-3"
                            placeholder="Ingresa un DNI">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-75 fs-4 ">Agregar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {* MODAL AUTO *}
    <div class="modalAuto justify-content-center">
        <div class="modalAuto__container pb-4">
            <div class="d-flex justify-content-end mx-auto" style="width: 90%">
                <button type="button" class="cerrarModal cerrarModalAuto">X</button>
            </div>
            <div>
                <h2 class="text-center mb-5">Agregando un auto nuevo</h2>
                <form method="post" action="addAuto">
                    <div class="form-group w-75 mx-auto">
                        <input type="text" min="0" name="patente" class="form-control mb-2 fs-3"
                            placeholder="Ingresa numero de patente">
                    </div>
                    <div class="form-group w-75 mx-auto">
                        <label class="fs-5">Ingresa hora de entrada</label>
                        <input type="time" min="0" name="entrada" class="form-control mb-2 fs-3">

                    </div>
                    <div class="form-group w-75 mx-auto">
                        <select class="form-control mb-2 fs-4" name="cliente">
                            <option value="">Ingrese un cliente</option>
                            {foreach from=$clientes item=$cliente}
                                <option value="{$cliente->id}">El nombre es:
                                    {$cliente->nombre} - DNI: {$cliente->DNI}
                                </option>
                            {/foreach}
                            <select>
                    </div>
                    <div class="form-group w-75 mx-auto">
                        <select class="form-control mb-2 fs-4" name="estacionamiento">
                            <option value="">Ingrese un estacionamiento</option>
                            {foreach from=$estacionamientos item=$parking}
                                {if $parking->libre == 1}
                                    <option value="{$parking->numeroEstacionamiento}">El estacionamiento numero:
                                        {$parking->numeroEstacionamiento}
                                    </option>
                                {/if}
                            {/foreach}
                            <select>
                    </div>



                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-75 fs-4 ">Agregar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    

</section>


<script src="./js/home.js">
</script>
{include file="footer.tpl"}