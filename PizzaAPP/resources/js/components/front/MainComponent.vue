<template>
<div>
    <div class="container">
        <nav class="background-purple">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center logo-wrapper" style="">
                        <img class="css-adaptive" src="img/logo.png" alt="">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <router-link :to="{ name: 'cart' }">
                            <i class="material-icons green-text">shopping_cart</i>
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
        name: "MainComponent"
    }
</script>

<style scoped>

</style>
