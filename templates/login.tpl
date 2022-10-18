{include file="header.tpl"}

<section class="content">
<div class="main">  	
    <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="POST" action="registrar">
                <label class="labelLogin" for="chk" aria-hidden="true">Registrarme</label>
                <div class="selectRegistro__container">
                    <select class="selectRegistro" id="" name="tipo" >
                        <option value="empleado">Empleado</option>
                    </select>
                </div>
                <input  class="inputLogin" type="text" name="user" placeholder="Nombre de usuario" required="">
                <input   class="inputLogin" type="password" name="password" placeholder="Password" required="">
                <button class="btnLogin">Registrarse</button>
            </form>
        </div>

        <div class="login">
            <form method="POST" action="verify">
                <label class="labelLogin" for="chk" aria-hidden="true">Iniciar sesion</label>
                 <div class="selectRegistro__container">
                    <select class="selectRegistro" id="tipo" name="tipo" >
                        <option value="administrador">Admin</option>
                        <option value="empleado">Empleado</option>
                    </select>
                </div>
                <input class="inputLogin" type="text" name="user" placeholder="Ingrese su nombre de usuario" id="user" required="">
                <input  class="inputLogin" type="password" name="password" placeholder="Password" id="password" required="">
                <button class="btnLogin" >Iniciar sesion</button>
            </form>
            <div>
                {if $error}
                <div id="alertaLogin" class="alert alert-danger fs-4 text-center" >
                {$error}
                </div>
                {/if}
        
        
            </div>
        </div>
</div>
</section>

{if $error}
    <script src="./js/login.js">
    </script>
{/if}
{include file="footer.tpl"}