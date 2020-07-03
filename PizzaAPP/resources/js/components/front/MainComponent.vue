<template>
<div>
        <div class="navbar-fixed">
            <nav class="background-purple">
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo center logo-wrapper" style="">
                        <img class="css-adaptive" src="img/logo.png" alt="">
                    </a>
                    <ul id="" class="right">
                        <li class="">
                            <router-link :to="{ name: 'cart' }" class="line-height50">
                            <span class="counter-pizza green-text line-height50"
                                  v-if="!isCartEmpty">{{ this.$store.getters.countPizzasInCart}} in the cart</span>
                                <i class="material-icons inline cart-icon line-height50"
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
