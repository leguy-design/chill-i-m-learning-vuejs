<template>
    <div>
        <panier-component/>

        <input v-model="q" type="text" placeholder="Recherche par mots-clés" class="form-control">
        <div v-for="product in getFilteredProducts">
            <div class="container border border-black my-2 ">
                <div class="card-body">
                    <h5 class="card-title">{{ product.name }}</h5>
                    <p class="card-text">{{ product.description }}</p>
                    <div class="d-flex text-right mt-2">
                        <button v-on:click="addCart(product)" class="btn btn-primary">{{product.price}}</button>
                    </div>
                </div>
            </div>
        </div>
        <span>{{ listCart }}</span>
        <div v-for="itemcart in listCart">
            {{ itemcart.name }}
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                listCart: [],
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
            },
            addCart(product){
                const itemcart = {
                    name : product.name,
                    price : product.price,
                    how : 1
                }
                this.listCart.push(itemcart)
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
