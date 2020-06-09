export default {
    state: {
        count: 0,
        pick: 0,
        pickcost: 15,
        pickvalue: 0.1,
        minecart: 0,
        mincartcost: 100,
        minecartvalue: 1,
    },
    mutations: {
        increment (state) {
            state.count++;
        },
        stop (state){
            clearInterval();
        },
        pickcounter (state) {
            state.count = state.count + state.pickvalue;
        },
        pick (state) {
            state.pick++;
        },
        buypick (state) {
            state.count = state.count-state.pickcost;
            state.pickcost = state.pickcost+(state.pickcost*0.2);
        },
        minecartcounter (state) {
            state.count = state.count + state.minecartvalue;
        },
        minecart (state) {
            state.minecart++;
        },
        buyminecart (state) {
            state.count = state.count - state.mincartcost;
            state.mincartcost = state.mincartcost + (state.mincartcost*0.2);
        },

    },

    actions: {
        pickmaining (context) {
            context.commit('stop');
            context.commit('buypick');
            context.commit('pick');
            setInterval(()=>{
                context.commit('pickcounter');
            }, 1000)
        },
        minecartmining (context) {
            context.commit('stop');
            context.commit('buyminecart');
            context.commit('minecart');
            setInterval(()=>{
                context.commit('minecartcounter');
            }, 1000)
        }
    },
}
