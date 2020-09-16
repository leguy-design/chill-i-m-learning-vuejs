<template>
    <div class="card h-100 rounded" style="width: 18rem; margin-left: 3rem; margin-right: 3rem; margin-top: 3rem; margin-bottom: 3rem;">
        <img :src="thumbnail" :alt="name" class="card-img-top" >
        <div class="card-header">
            <span class="card-title font-weight-bold">{{ name }}</span>
        </div>
        <div class="card-body">
            <p class="card-text">{{ description }}</p>
        </div>
        <div class="card-footer bg-primary">
            <span class="text-white">{{ price }}</span>
        </div>
    </div>
</template>
<script>
    export default {
        // on utilise props pour envoyer des values de product
        props: [
            'thumbnail',
            'name',
            'price',
            'description'
        ],

    }
</script>
