<template>
    <div>
        <input v-model="q" type="text" placeholder="Recherche par mots-clés" class="form-control">
        <div v-for="product in getFilteredProducts">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ product.name }}</h5>
                    <p class="card-text">{{ product.description }}</p>
                    <a href="#" class="btn btn-primary">{{ product.price }}</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                products: [],
                q: '',
            }
        },
        // on indique comment passer l'objet'
        methods: {
            // pour récuperer les données des images:
            getProducts: function () {
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
            getFilteredProducts() {
                return this.products.filter(product => {
                    return product.description.toLowerCase().includes(this.q.toLowerCase())
                })
            }
        },
        // quand le document est chargé on appelle this.getImages
        mounted() {
            this.getProducts()
        },
    }
</script>
