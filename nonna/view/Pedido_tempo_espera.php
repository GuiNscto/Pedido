<?php include 'inc/header.php'; ?>

<h2>Pedidos</h2>

<div class="text-right">
    <br>
    <br>
    <br>
</div>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Data do Pedido</th>
        <th>Cliente</th>
        <th>Atendente</th>
        <th>Tempo de espera</th>
        <th>Status</th>
    </tr>
    <?php foreach( $pedidos AS $pedido ){ ?>
        <tr>
            <td><?=$pedido->id?></td>
            <td><?=$pedido->data?></td>
            <td><?=$pedido->cliente_nome?></td>
            <td><?=$pedido->funcionario_nome?></td>
            <td><?=$pedido->tempo_espera?></td>
            <td><?=$pedido->status?></td>
        </tr>
    <?php } ?>
</table>

<?php include 'inc/footer.php'; ?>


