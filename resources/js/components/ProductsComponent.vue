<template>
    <div class="row text-center">
        <div v-for="product in products" class="mx-auto">
            <product-component :thumbnail="product.thumbnail" :name="product.name" :price="product.price"/>
        </div>
    </div>

</template>
<script>
    import ProductComponent from "./ProductComponent";
    export default {
        components: {ProductComponent},
        data: function () {
            return {
                products: [],
            }
        },
        mounted() {
            this.getImages();
        },
        methods: {
            // pour récuperer les données des tes images par exemple:
            getImages: function () {
                axios.get('/products')
                    .then(response => {
                        this.products = Object.values(response.data.items).flat();
                        console.log(this.products);
                    })
                .catch(error => {
                    console.log(error);
                });
            }
        }
    }
</script>
