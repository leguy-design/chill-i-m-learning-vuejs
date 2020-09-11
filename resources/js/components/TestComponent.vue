<template>
    <div>
        <button v-on:click="increment">tu m'as cliqué dessus {{ this.amount}} fois!</button>
        <child-component :foo="amount"/>
    </div>
</template>
<script>
    import ChildComponent from "./ChildComponent";
    export default {
        components: {ChildComponent},
        data: function () {
            return {
                amount: 0,
                dummyData: [],
            }
        },
        mounted() {
            this.getDummyData();
        },
        methods: {
            increment: function () {
                this.amount++;
            },

            // pour récuperer les données des tes images par exemple:
            getDummyData: function () {
                axios.get('/get-dummy-data')
                    .then(response => {
                        this.dummyData = response.data;
                    });
            }
        }
    }
</script>
