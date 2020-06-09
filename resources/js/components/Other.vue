<template>
<div class="m-auto">
  <div class="row">
    <div class="col pt-2">
        <label class="mt-1 text-light"> Cost of Pick: {{ pickcost.toFixed(2) }} </label>
    </div>
    <div class="col pt-2">
        <button
            @click="pickmaining"
            :disabled="count < pickcost ? '' : disabled"
            class="btn btn-secondary float-right"
             data-toggle="tooltip"
             data-placement="top"
             title="Pick gain 1 coal per 10 secounds"
            >
                Buy
            </button>
        </div>
    <div class="w-100"></div>
    <div class="col pt-2"><label class="mt-1 text-light"> Cost of Minecart: {{ mincartcost.toFixed(2) }} </label> <br></div>
    <div class="col pt-2"><button @click="minecartmining" :disabled="count < mincartcost ? '' : disabled" class="btn btn-secondary float-right">Buy</button></div>
    <div class="w-100"></div>
    <div class="col pt-2"><label class="mt-1 text-light"> Cost of Miner: {{ minercost.toFixed(2) }} </label> <br></div>
    <div class="col pt-2"><button @click="minermining" :disabled="count < minercost ? '' : disabled" class="btn btn-secondary float-right">Buy</button></div>
  </div>
</div>
</template>
<script>
import {mapState, mapActions} from 'vuex';
export default {
    computed: {
        ...mapState(['count']),
        ...mapState(['pickcost']),
        ...mapState(['mincartcost']),
        ...mapState(['minercost'])
    },
    methods: {
        ...mapActions(['pickmaining']),
        ...mapActions(['minecartmining']),
        ...mapActions(['minermining'])
    },
}
</script>
