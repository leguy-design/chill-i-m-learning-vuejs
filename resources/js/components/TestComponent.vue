<template>
    <div>
        <span>hi {{ this.amount }}</span>
        <button v-on:click="increment">go frero</button>
        <child-component :amount="this.amount"/>
        <images-component/>
    </div>
</template>
<script>
    export default {
        data: function() {
            return {
                amount: 0,
            }
        },
        mounted() {
            console.log("value of amount at beginning " + this.amount);
            this.increment();
        },
        methods: {
            increment: function() {
                this.amount += 1;
                console.log("value of amount now " + this.amount);
            }
        }
    }
</script>
