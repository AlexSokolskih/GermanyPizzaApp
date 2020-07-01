<template>
    <div class="container cart">
        <div class="row">
            <h1>Cart</h1>
        </div>
        <div class="row">
            <div v-for="pizza in pizzas">
                <cart-card
                    v-bind:pizza="pizza">
                </cart-card>
            </div>
        </div>
        <div class="row">
            <router-link :to="{ name: 'order' }"
                         class="waves-effect waves-light btn-large deep-purple">
                <b>ORDER NOW</b>
            </router-link>
        </div>
    </div>
</template>

<script>
    import CartCard from './Cart/CartCard';

    export default {
        name: "Cart",
        components: {
            'cart-card': CartCard,
        },
        data() {
            return {
                pizzas:[],
            }
        },
        mounted() {
          this.pizzasInCart();
        },
        methods: {
            pizzasInCart: function () {
                var pizzasGlobal = this.$store.state.cart.pizzas.slice();
                for (var i=0; i<pizzasGlobal.length; i++){
                    pizzasGlobal[i].count=1;
                    for (var j=i+1; j<pizzasGlobal.length; j++){
                        if ( pizzasGlobal[i].id == pizzasGlobal[j].id ){
                            pizzasGlobal[i].count++;
                            pizzasGlobal.splice(j, 1);
                            j--;
                        }
                    }

                }
                this.pizzas = pizzasGlobal;
            }
        },
        computed: {
        }
    }
</script>

<style scoped>

</style>
