<template>
<div class="m-auto">
    <div>
        <label for=""> Cost of Pick: {{ pickcost.toFixed(2) }} </label> <br>
        <button @click="pickmaining" :disabled="count < pickcost ? '' : disabled" class="btn btn-secondary">Buy</button>
    </div>
    <div>
        <label for=""> Cost of Minecart: {{ mincartcost.toFixed(2) }} </label> <br>
        <button @click="minecartmining" :disabled="count < mincartcost ? '' : disabled" class="btn btn-secondary">Buy</button>
    </div>
</div>
</template>
<script>
import {mapState, mapActions} from 'vuex';
export default {
    computed: {
        ...mapState(['count']),
        ...mapState(['pickcost']),
        ...mapState(['mincartcost'])
    },
    methods: {
        ...mapActions(['pickmaining']),
        ...mapActions(['minecartmining'])
    },
}
</script>
