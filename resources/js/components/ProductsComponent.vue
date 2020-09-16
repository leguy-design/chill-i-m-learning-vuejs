<template>
    <!--    i faut toujours une div pour englober le contenu d'un component-->
    <div>
        <div class="row text-center">
            <!--        pour chaque produit dans produits-->
            <div v-for="product in this.products" class="my-auto mx-auto">
                <!--            ici c po obligé mais on appelle le produc component en lui passant les values -->
                <product-component :thumbnail="product.thumbnail":description="product.description" :name="product.name" :price="product.price" class="shadow-lg"/>
            </div>
        </div>
    </div>
</template>
<script>
// s'occupe d'implémenter la div product-component et est produit a la compilation
    import ProductComponent from "./ProductComponent";
    // on exporte ce code vers l'app.js
    export default {
        // s'occupe d'implémenter la div product-component et est produit a la compilation
        components: {ProductComponent},
        // on cite la function qu'on return un tableau vide de products'
        data: function () {
            return {
                products: [],
                q: '',
            }
        },
        // quand le document est chargé on appelle this.getImages
        mounted() {
            this.getImages();
        },
        // on indique comment passer l'objet'
        methods: {
            // pour récuperer les données des images:
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
        },
    }
</script>
