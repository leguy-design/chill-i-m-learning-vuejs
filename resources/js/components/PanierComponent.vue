<template>
    <div class="card-body">
        <span class="uppercase">{{ name }}</span>
        <span><small>x<strong>{{ amount }}</strong></small></span>
    </div>
</template>
<script>
    export default {
        props: ['name', 'amount'],
    }

</script>
