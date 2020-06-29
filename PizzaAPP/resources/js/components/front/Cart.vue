<template>
    <div class="container cart">
        <div class="row">
            <h1>Cart</h1>
        </div>
        <div class="row">
            <div class="col s12 m3">
                <div class="card small">
                    <div class="card-title center"><b>Pepperoni</b></div>
                    <div class="card-image">
                        <img src="img/Pepperoni-traditional.jpg">
                    </div>
                    <div class="card-content">
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <h5 class="font-weight-bold"><b>2</b></h5>
                        </div>
                        <div class="center">
                            <span class="float-left"><i class="material-icons green-text medium">remove</i></span>
                            <b class=""></b>
                            <span class="float-left"><i class="material-icons green-text medium">add</i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <router-link :to="{ name: 'order' }"
                             class="waves-effect waves-light btn-large deep-purple"
                >
                    <b>ORDER NOW</b>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Cart"
    }
</script>

<style scoped>

</style>
