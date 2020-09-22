<template>
    <div class="card-body">
        <span class="uppercase">{{ name }}</span>
        <span>{{ price }}</span>
        <span><small>x<strong>{{ amount }}</strong></small></span>
        <br>
        <span>{{ total }}</span>
    </div>
</template>
<script>
    export default {
        props: ['name', 'amount', 'price', 'total'],
    }

</script>
