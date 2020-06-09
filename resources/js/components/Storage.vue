<template>
    <div class="m-auto">
           <p class=""> Number of Picks {{pick}}</p>
           <p> Number of Minecarts {{minecart}}</p>
    </div>
</template>

<script>
    import {mapState} from 'vuex';

    export default {
        computed: {
            ...mapState(['pick']),
            ...mapState(['minecart']),
        },
    }
</script>
