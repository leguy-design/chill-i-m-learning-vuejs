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
        props: [
            'thumbnail',
            'name',
            'price',
        ],
    }
</script>
