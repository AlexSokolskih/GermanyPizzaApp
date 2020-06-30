<template>
    <div class="col s12 m4">
        <div class="card large">
            <span class="card-title"><b>{{ pizza.name }}</b></span>
            <div class="card-image">
                <img v-bind:src="'img/'+pizza.image">
            </div>
            <div class="card-content">
                <p>{{ pizza.description }}</p>
            </div>
            <div class="card-action">
                <a class="waves-effect waves-light btn-small"
                   @click="addToCart"
                >ADD TO CART</a>
                <b class="price">{{ pizza.price }} ₽</b>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "PizzaCard",
        props: ['pizza'],
        methods: {
            addToCart: function () {
                  this.$store.commit('addPizza', this.pizza);
            },
        },
    }
</script>

<style scoped>

</style>
