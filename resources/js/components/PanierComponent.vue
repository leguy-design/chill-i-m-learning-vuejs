<template>
    <div class="card-body">
        <span>{{ name }}</span>
        <span>{{ price }}</span>
    </div>
</template>
<script>
    export default {
        props: ['name', 'price'],
    }
</script>
