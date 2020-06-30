<template>
<div>
    <div class="container">
        <nav class="background-purple">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center logo-wrapper" style="">
                        <img class="css-adaptive" src="img/logo.png" alt="">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="">
                        <router-link :to="{ name: 'cart' }">
                            <span class="counter-pizza green-text"
                            v-if="!isCartEmpty">{{ this.$store.getters.countPizzasInCart}} in the cart</span>
                            <i class="material-icons inline cart-icon"
                               :class="{
                                'green-text': !isCartEmpty,
                               }"
                            >shopping_cart</i>
                        </router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <router-view></router-view>
</div>
</template>

<script>
    export default {
        name: "MainComponent",
        computed: {
            isCartEmpty: function () {
                return (this.$store.getters.countPizzasInCart == 0) ;
            },
        }
    }
</script>

<style scoped>

</style>
