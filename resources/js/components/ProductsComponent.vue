<template>
<!--    i faut toujours une div pour englober le contenu d'un component-->
    <div class="row text-center">
<!--        pour chaque produit dans produits-->
        <div v-for="product in products" class="mx-auto">
<!--            ici c po obligé mais on appelle le produc component en lui passant les values -->
            <product-component :thumbnail="product.thumbnail" :name="product.name" :price="product.price"/>
        </div>
    </div>

</template>
<script>
// ca c fé auto mé bon
    import ProductComponent from "./ProductComponent";
    // on exporte ce code vers l'app.js
    export default {
        // kesako ca c auto auto
        components: {ProductComponent},
        // on cite la function qu'on return un tableau vide de products'
        data: function () {
            return {
                products: [],
            }
        },
        // quand le document est ready
        mounted() {
            this.getImages();
        },
        // on indique comment passer l'objet'
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
