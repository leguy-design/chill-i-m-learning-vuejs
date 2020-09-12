<template>
    <div>
        <div>hello</div>
        <div v-for="image in this.images">
            <img v-bind:src="image.creation_url">
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                images: [],
            }
        },
        mounted() {
            this.getImages();
        },
        methods: {
            getImages: function () {
                axios.post('/images')
                .then(response => {
                    // JSON responses are automatically parsed.
                    this.images = Object.values(response.data.items).flat();
                    console.log(this.images);
                })
            }
        }
    }
</script>
