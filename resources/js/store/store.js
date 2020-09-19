
import Vuex from 'vuex'
Vue.use(Vuex);


export const store = new Vuex.Store({
    state: {
        currentJoke: 'This is a joke !',
        allJokes: []
    },
    mutations: { //syncrous
        setCurrentJoke(state, payload) {
            state.currentJoke = payload;
            state.allJokes.push(payload)
        }
    },
    actions: {},
    module: {},
    getters: {
        //collecte les infos et les renvoie partout
        getCurrentJoke: state => state.currentJoke
    },
});

