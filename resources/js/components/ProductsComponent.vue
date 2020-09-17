<template>
    <!--    i faut toujours une div pour englober le contenu d'un component-->
    <div>
        <input v-model="q" type="text" placeholder="Recherche par mots-clés" class="form-control">
        <div class="container">
            <div class="row text-center">
                <!--        pour chaque produit dans produits-->
                <div v-for="product in getFilteredProd" class="my-auto mx-auto">
                    <!--            ici c po obligé mais on appelle le produc component en lui passant les values -->
                    <div class="card h-100 rounded" style="min-height: 42rem; max-height: 42rem; width: 18rem; margin-left: 3rem; margin-right: 3rem; margin-top: 3rem; margin-bottom: 3rem;">
                        <img :src="product.thumbnail" :alt="product.name" class="card-img-top" >
                        <div class="card-header">
                            <span class="card-title font-weight-bold">{{ product.name }}</span>
                        </div>
                        <div class="card-body relative">
                            <p class="card-text absolute absolute-45">{{ product.description }}</p>
                        </div>
                        <div class="card-footer bg-primary">
                            <span class="text-white">{{ product.price }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    // on exporte ce code vers l'app.js
    export default {
        // s'occupe d'implémenter la div product-component et est produit a la compilation
        // on cite la function qu'on return un tableau vide de products'
        data: function () {
            return {
                products: [],
                q: '',
            }
        },

        // on indique comment passer l'objet'
        methods: {
            // pour récuperer les données des images:
            getProductOnProducts: function () {
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
        computed: {
            getFilteredProd() {
                return this.products.filter(product => {
                    return product.description.toLowerCase().includes(this.q.toLowerCase())
                })
            }
        },
        // quand le document est chargé on appelle this.getProductOnProducts
        mounted() {
            this.getProductOnProducts();
        },
    }
</script>
