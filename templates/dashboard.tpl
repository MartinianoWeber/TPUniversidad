{include file="header.tpl"}

<body>
    <section class="d-flex" style="height: 100vh;">
        {include file="sidebar.tpl"}
        <section class="w-100">
    <table class="tableDashboard">
            <h2>Historial de clientes y autos</h2>
        <tr>
            <td>Auto</td>
            <td>Cliente nombre</td>
            <td>Cliente telefono</td>
            <td>Cliente DNI</td>
           
        </tr>
        {foreach from=$historial item=itemHistorial}
        <tr>
            <td>{$itemHistorial->patente}</td>
            <td>{$itemHistorial->nombre}</td>
            <td>{$itemHistorial->telefono}</td>
            <td>{$itemHistorial->DNI}</td>
        </tr>
        {/foreach}
    </table>
    </section>

</body>

{include file="footer.tpl"}