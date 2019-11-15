<?php include 'inc/header.php'; ?>

<h2>Pedidos</h2>

<?php
// se houver uma mensagem de erro, mostra na tela
if ( isset($_SESSION['msg']) ){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<div class="text-right">
    <a class="btn btn-primary" href="?classe=Pedido&acao=create"><i class="fa fa-plus"></i> Novo</a>
    <br>
    <br>
</div>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Data do Pedido</th>
        <th>Cliente</th>
        <th>Atendente</th>
        <th>Total do Pedido</th>
        <th>Ações</th>
    </tr>
    <?php foreach( $pedidos AS $pedido ){ ?>
        <tr>
            <td><?=$pedido->id?></td>
            <td><?=$pedido->data?></td>
            <td><?=$pedido->cliente_nome?></td>
            <td><?=$pedido->funcionario_nome?></td>
            <td><?=$pedido->total?></td>
            <td>
                <a class="btn btn-primary" href="?classe=Pedido&acao=read&id=<?=$pedido->id?>"><i class="fa fa-search"></i> Ver</a>
                <a class="btn btn-primary" href="?classe=Pedido&acao=update&id=<?=$pedido->id?>"><i class="fa fa-edit"></i>Alterar</a>

                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-excluir" data-id="<?=$pedido->id?>">
                    <i class="fa fa-trash"></i> Excluir
                </button>
            </td>
        </tr>
    <?php } ?>
</table>

<?php include 'inc/footer.php'; ?>


<!-- The Modal -->
<div class="modal fade" id="modal-excluir">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Excluir</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Tem certeza que deseja excluir o registro?
            </div>


            <!-- Modal footer -->
            <div class="modal-footer">
                <a id="btn-excluir" class="btn btn-primary" href="">Sim</a>

                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
            </div>

        </div>
    </div>
</div>

<script>
    $('#modal-excluir').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $("#btn-excluir").attr('href','?classe=Pedido&acao=delete&id='+id);
    });
</script>
