<template>
    <div class="container">
        <h3>Lista de imoveis</h3><br>
        <table id="teste" class="table table-striped">
            <thead>
                <tr>
                    <th v-for="(titulo, index) in titulos" :key="index">{{titulo}}</th>
                </tr>
            </thead>
                <tbody>
                        <tr v-for="imovel in itens">
                        <td>{{imovel.endereco}}</td>
                        <td>{{imovel.bairro}}</td>
                        <td>{{imovel.cidade}}</td>
                        <td>{{imovel.modalidadeVenda}}</td>
                        <td>{{imovel.precoOferta}}</td>
                        <td>{{imovel.valorAvaliacao}}</td>
                        <td>{{imovel.porcentagemDesconto}}</td>
                    </tr>
                </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        props: ['titulos', 'itens', 'ordem', 'ordemcol'],
        }
setTimeout(function(){
    $('#teste').DataTable({
        "order": [[ 4, "desc" ]],
        "columnDefs": [{
        "render": function(data){
         return parseFloat(data).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});},
        "targets": [4,5]
        }],
        "language": {
            "decimal": ",",
            "thousands": ".",
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "Mostrar _MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }       
        }
    });
}, 1000);
</script>
<style>
.pull-right{
    float: right;
}
</style>
