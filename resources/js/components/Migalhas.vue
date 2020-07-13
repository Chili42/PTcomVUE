<template>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{paginaanterior}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{paginaatual}}</li>
        </ol>
    </nav>
</template>

<script>
    export default {
    props: ['paginaanterior', 'paginaatual']
    }
</script>
<style>
    .breadcrumb{
        background-color: white;
        float: right;
        margin-right: 10%;
    }
</style>