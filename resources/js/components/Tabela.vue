<template>
<div class="container">
        <h3>Lista de imoveis</h3><br>

        <div class="form-group pull-right">
            <input type="search" class="form-control" placeholder="Buscar Imóvel" v-model="buscar">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th v-for="titulo in titulos">{{titulo}}</th>
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
        props: ['titulos', 'itens'],
        data: function(){
            return {
                buscar:''
            }
        },
        computed:{
            lista:function(){
                return this.itens.filter(res => {
                    for (let percorreTabela = 0; percorreTabela < res.length; percorreTabela++ ){
                        if(res[percorreTabela].toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                        return true;
                      }
                    }
                    return false;
                })
                return this.itens;
            }
        }
    }
</script>
<style>
.pull-right{
    float: right;
}
</style>
