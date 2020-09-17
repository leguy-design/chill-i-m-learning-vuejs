<template>
    <div class="bottom-0 right-0 fixed m-3 card bg-danger text-white">
        <span class="card-header">Panier</span>
        <div class="card-body">
            <span>{{ name }}</span>
            <span>{{ price }}</span>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['name', 'price'],
    }
</script>
