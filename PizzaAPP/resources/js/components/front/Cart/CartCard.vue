<template>
    <div class="col s12 m3">
        <div class="card small">
            <div class="card-title center"><b>{{ pizza.name }}</b></div>
            <div class="card-image">
                <img v-bind:src="'img/'+pizza.image">
            </div>
            <div class="card-content">
            </div>
            <div class="card-action">
                <div class="center">
                    <h5 class="font-weight-bold"><b>{{ count }}</b></h5>
                </div>
                <div class="center">
                    <span class="float-left">
                        <i class="material-icons green-text medium"
                           @click="removeFromCart"
                        >remove</i>
                    </span>
                    <b class=""></b>
                    <span class="float-left">
                        <i class="material-icons green-text medium"
                           @click="addToCart"
                        >add</i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CartCard",
        props: ['pizza'],
        data() {
            return {
                count:0,
            }
        },
        mounted() {
            this.count = this.pizza.count;
        },
        methods: {
            removeFromCart: function () {
                    if ( this.pizza.count>0){
                        this.count--;
                    }
                this.$store.commit('removePizza', this.pizza);
            },
            addToCart: function () {
                this.$store.commit('addPizza', this.pizza);
                this.count++;
            },
        }
    }
</script>

<style scoped>

</style>
