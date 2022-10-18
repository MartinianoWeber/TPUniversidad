{include file="header.tpl"}

<body>
    <section class="d-flex" style="height: 100vh;">
        {include file="sidebar.tpl"}
        <div class="w-100">
            <table  class="tablaGanancia">
                <thead>
                    <tr>
                        <th>Auto</th>
                        <th>Valor hora</th>
                        <th>Total ganado</th>
                        <th>Horas</th>
                        <th>total</th>

                    </tr>
                </thead>
                <tbody>
                    {foreach from=$ganancias item=$items}
                        <tr>
                            <td>{$items->autos}</td>
                            <td>{$items->valorHora}</td>
                            <td class="ganancias">{$items->totalGanado}</td>
                            <td>{$items->horas}</td>
                            <td id="lastTable"></td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
    </section>

    <script src="./js/ganancias.js"></script>
</body>

{include file="footer.tpl"}