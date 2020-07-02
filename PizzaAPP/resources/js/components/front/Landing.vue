<template>
    <div class="container lending">
        <hr style="visibility: hidden;">
        <div class="row">
            <div v-for="pizza in pizzas">
                <card-component
                    v-bind:pizza="pizza"
                ></card-component>
            </div>
        </div>
        <div class="row">
            <router-link :to="{ name: 'cart' }"
                         @click="getpizzas"
                         class="waves-effect waves-light btn-large deep-purple"
            >
                <b>GO to cart</b>
                <i class="material-icons right">shopping_cart</i>
            </router-link>
        </div>
    </div>
</template>

<script>
   import PizzaCardComponent from './landing/PizzaCard';

    export default {
        name: "landing",
        components: {
            'card-component': PizzaCardComponent,
        },
        data() {
            return {
                pizzas:[],
            }
        },
        mounted() {
            this.getpizzas();
            this.getrates();
        },
        methods: {
            getpizzas: function () {
                axios.get('/api/pizzas')
                    .then((response) => {
                        this.pizzas = response.data;
                    })
                    .catch(function (error) {
                        //this.errored = true;
                        console.log('error:');
                        console.log(error);
                    });

            },
            getrates: function () {
                axios.get('/api/rates')
                    .then((response) => {
                        this.$store.state.rates.USD_RUB = response.data.usd_rub;
                        this.$store.state.rates.EUR_RUB = response.data.eur_rub;
                    })
                    .catch(function (error) {
                        //this.errored = true;
                        console.log('error:');
                        console.log(error);
                    });

            }
        }
    }
</script>

<style scoped>

</style>
