<template>
<div>
    <div class="container">
        <nav class="background-purple">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center logo-wrapper" style="">
                        <img class="css-adaptive" src="img/logo.png" alt="">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="collapsible.html"><i class="material-icons green-text">shopping_cart</i></a></li>
                </ul>
            </div>
        </nav>
    </div>


    <landing-component></landing-component>
    <cart-component></cart-component>
    <order-component></order-component>
</div>
</template>

<script>
    export default {
        name: "MainComponent"
    }
</script>

<style scoped>

</style>
