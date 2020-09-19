<template>
<!--    <div class="card h-100 rounded" style="width: 18rem; margin-left: 3rem; margin-right: 3rem; margin-top: 3rem; margin-bottom: 3rem;">-->
<!--        <img :src="thumbnail" :alt="name" class="card-img-top" >-->
<!--        <div class="card-header">-->
<!--            <span class="card-title font-weight-bold">{{ name }}</span>-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--            <p class="card-text">{{ description }}</p>-->
<!--        </div>-->
<!--        <div class="card-footer bg-primary">-->
<!--            <span class="text-white">{{ price }}</span>-->
<!--        </div>-->
<!--    </div>-->
    <div class="card w-8/12 mx-auto absolute absolute-45">
        <div class="px-14 py-6 flex justify-content-between text-center border-b">
            <a href="#" class="text-blue-600 font-extrabold">Les Blagues</a>
            <a href="#" class="text-gray-600 font-semibold">Les Blagues</a>
        </div>
        <div class="h-40 relative mx-2 my-2">
            <span class="px-14">{{ joke }}</span>
            <button class="absolute left-0 bottom-0 w-full mt-10 py-2 px-4 text-white rounded bg-blue-500 hover:bg-blue-700 focus:outline-none">Ajouter blague</button>
        </div>
    </div>
</template>
<script>
    export default {
        // on utilise props pour envoyer des values de product
        data: function() {
            return {
                joke: ''
            }
        },
        mounted() {
            this.joke = this.$store.getters.getCurrentJoke;

        },
    }

</script>



