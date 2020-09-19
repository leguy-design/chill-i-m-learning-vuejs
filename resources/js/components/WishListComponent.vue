<template>
    <div>
        <button v-on:click="count++" class="rounded-full bg-success text-white text-2xl">+</button>
        <span>{{ count }}</span>
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
        <div class="bottom-0 right-0 fixed m-3 card bg-danger text-white">
            <span class="card-header">Panier</span>
            <div v-for="itemcart in listCart">
                <div class="card-body">
                    <span>{{ itemcart.name }}</span>
                    <span>{{ itemcart.price }}</span>
                </div>
            </div>
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
                count: 0
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
                    amount: product.amount
                };
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
