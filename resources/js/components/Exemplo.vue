<template>
<div class="table">
        <h3>Lista de imoveis</h3><br>

        <div class="form-group pull-right">
            <input type="search" class="form-control" placeholder="Buscar Imóvel" v-model="buscar">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                     <th v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos" :key="index">{{titulo}} <i class="fas fa-arrows-alt-v"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in lista">
                    <td v-for="i in item">{{i}}</td>
                </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['titulos', 'itens', 'ordem', 'ordemcol'],
        data: function(){
            return {
                buscar:'',
                ordemAux: this.ordem || "desc",
                ordemAuxCol: this.ordemcol || 0
            }
        },
        methods: {
            ordenaColuna: function (coluna) {
                this.ordemAuxCol = coluna
                if (this.ordemAux.toLowerCase() == 'asc'){
                    this.ordemAux = 'desc';
                }else{
                    this.ordemAux = 'asc';
                }
            }
        },
        computed:{
            lista:function(){
                
                let ordem = this.ordemAux;
                let ordemcol = this.ordemAuxCol;
                ordem = ordem.toLowerCase();
                ordemcol = parseInt(ordemcol);
                if (ordem == 'asc'){
                    this.itens.sort(function(a,b){
                        if ((a)[ordemcol] > (b)[ordemcol]) { return 1;}
                        if ((a)[ordemcol] < (b)[ordemcol]) { return -1;}
                        return 0;
                    });
                }else{
                        this.itens.sort(function(a,b){
                        if ((a)[ordemcol] < (b)[ordemcol]) { return 1;}
                        if ((a)[ordemcol] > (b)[ordemcol]) { return -1;}
                        return 0;
                    })
                }
                
                if (this.buscar){
                        return this.itens.filter(res => {
                        for (let percorreTabela = 0; percorreTabela < res.length; percorreTabela++ ){
                            if(res[percorreTabela].toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                            return true;
                        }
                        }
                        return false;
                    })
                }
                return this.itens;
            }
        }
    }
</script>
<style>
.pull-right{
    float: right;
}
.table{
    padding-left: 2%;
    padding-right: 2%;
}
</style>