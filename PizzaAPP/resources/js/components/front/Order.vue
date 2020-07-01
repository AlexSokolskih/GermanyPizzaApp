<template>
    <div class="container order">
        <div class="row">
            <h1>Order form</h1>
        </div>
        <div class="row">
            <form class="col s12">
                <h4>Contact information</h4>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" class="validate" v-model="name">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="surname" type="text" class="validate" v-model="surname">
                        <label for="surname">Surname</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="phone" type="tel" class="validate" v-model="phone">
                        <label for="phone">Telephone</label>
                    </div>
                </div>
                <h4>Delivery</h4>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="address" type="text" class="validate" v-model="address">
                        <label for="address">Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="flat" type="text" class="validate" v-model="flat">
                        <label for="flat">Flat / Office</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="floor" type="text" class="validate" v-model="floor">
                        <label for="floor">Floor</label>
                    </div>
                </div>
                <div class="row">
                    <a id="submit-button" class="waves-effect waves-light btn-large deep-purple"
                       @click="submitForm">Go</a>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Order",
        data() {
            return {
                pizzas:[],
                name: '',
                surname: '',
                phone: '',
                address: '',
                flat: '',
                floor: '',
            }
        },
        mounted() {
            console.log('piz1');
            this.pizzasInCart();
            console.log('piz2');
            console.log(this.pizzas);
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

               var myArray = [];
               for (var i=0; i<pizzasGlobal.length; i++){
                   myArray[i] = new Object();
                   myArray[i].count = pizzasGlobal[i].count;
                   myArray[i].id = pizzasGlobal[i].id;
                }
               this.pizzas = myArray;
               console.log('this.pizzas');
               console.log(this.pizzas );
               console.log(pizzasGlobal );
            },

            submitForm: function (event) {
                event.preventDefault();
                console.log(this.pizzas);
                axios.post('/api/orders', {
                    pizzas: this.pizzas,
                    name: this.name,
                    surname: this.surname,
                    phone: this.phone,
                    address: this.address,
                    flat: this.flat,
                    floor: this.floor,
                })
                    .then((response) => {
                        console.log(response);
                    })
                    .catch(function (error) {
                        // this.errored = true;
                         console.log('error:');
                         console.log(error);
                    });
            }
        },
    }
</script>

<style scoped>

</style>
