<template> 
<div :id="nome" class="modal fade" tabindex="-1" role="dialog" :aria-labelledby="nome" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{titulo}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="my-4">Atenção: Este é apenas um projeto de demonstração.</p>
          <p>O intuito deste projeto não é resolver as questões da Produção Temática, apenas mostrar o conhecimento de ferramentas apontadas como 
          diferenciais na especificação do PSI: <br>(tecnologias Back-End, paradigma OO e estrutura MVC)</p>
          <p>criei esta página em <b>PHP</b>, usando o <b>Laravel, Bootstrap, Adminlte e VUEJS </b>. Se você procura a resolução original da produção temática, irá encontra-lo no endereço 
          <a href="https://github.com/Chili42/PT"  target="_blank">https://github.com/Chili42/PT</a></p>

          <p>Para fazer essa pagina, usei o maximo de elementos do VUE para testar sua usabilidade e seu sistema de rotas no laravel que fica em <b>./js.app.js</b></p>

          <p>Na <b>Tabela Exemplo</b> criei uma tabela simples mas as opções de filtro e pesquisas foram todas feitas <span style="color: red;"><b>sem</b></span> o uso de frameworks
          usando apenas Javascript nos modelos do VUEJS
          </p>

          <p>Na <b>Tabela Json</b> trouxe a tabela <b>imoveis.json</b>, na formatação foi utilizado o DataTables.
          sua escolha foi por ja fazer uso desta ferramenta, mas existem outras opçãos nativas do VUE como o VUETIFY ou gridjs-vue
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</template>

<script>
    export default {
    props: ['nome', 'titulo']
    }
</script>
<style>
    p {
        margin-left: 3%;
    }
    .my-4 {
        color: red;
    }
</style>
