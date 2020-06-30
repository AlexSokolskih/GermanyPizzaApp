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
        },
        methods: {
            getpizzas: function () {
                axios.get('http://127.0.0.1:8000/api/pizzas')
                    .then((response) => {
                        this.pizzas = response.data;
                        console.log(response.data);
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
