{include file="header.tpl"}

<body>
    <section class="d-flex" style="height: 100vh;">
        {include file="sidebar.tpl"}
        <div class="w-100">
            <div class="d-flex justify-content-between w-100">
                <button id="parkingModal" class="btsControll btn btn-success">
                    Agregar nuevo estacionamiento
                </button>
                <button id="btnEliminar" class="btsControll btn btn-danger activo">
                    Eliminar
                </button>

                <div class="modalParking">
                </div>

            </div>
            <div class="cardContainer">
                {foreach from=$parkeos item=$parking}
                    {if $parking->libre == "1"}
                        <div class="cardEstacionamiento">
                            <div class="cardEstacionamiento__btns">
                                <a href="eliminarParking/{$parking->numeroEstacionamiento}">
                                    <img src="./imagenes/borrar.png" alt="">
                                </a>
                            </div>
                            <img src="./imagenes/garageSi.png" alt="">
                            <p>Numero de estacionamiento: {$parking->numeroEstacionamiento} - ¿esta libre? Si</p>
                        </div>
                    {else}
                        <div class="cardEstacionamiento">
                            <div class="cardEstacionamiento__btns">
                                <a href="eliminarParking/{$parking->numeroEstacionamiento}">
                                    <img src="./imagenes/borrar.png" alt="">
                                </a>
                            </div>
                            <img src="./imagenes/garajeNo.png" alt="">
                            <p>Numero de estacionamiento: {$parking->numeroEstacionamiento} - ¿esta libre? No</p>
                        </div>
                    {/if}

                {{/foreach}}
            </div>

        </div>




    </section>

</body>

<script src="./js/parking.js "></script>
{include file="footer.tpl"}