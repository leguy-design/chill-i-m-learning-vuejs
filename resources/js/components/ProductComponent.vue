<template>
        <div class="card h-100 rounded" style="width: 18rem;">
            <img :src="thumbnail" :alt="name" class="card-img-top" >
            <div class="card-body">
                <p class="card-text">{{ name }}</p>
            </div>
            <div class="card-footer">
                <span>{{ price }}</span>
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
        ],
    }
</script>
