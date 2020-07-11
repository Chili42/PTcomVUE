<template>
    <div class="card mb-3">
        <div  class="card-header">{{ titulo }}</div>
            <div class="card-body">
                <slot></slot>
            </div>
        </div>
    
</template>

<script>
    export default {
        props: ['titulo'],
    }
</script>
<style>
.border-primary{
    background-color: #007bff;
    color: white
}
.border-warning{
    background-color: #ffc107;
    color: white
}
.border-info{
    background-color: #17a2b8;
    color: white
}
</style>
