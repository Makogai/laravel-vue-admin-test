
const initialState = {
    posts: {
      id: {},
      title: "",
      body: "",
      categories: []
    },
  };
  
  export const state = { ...initialState };



export const actions = {
    async getPosts({commit}) {
        await axios.get('/api/posts').then((res) => {
            commit('setPosts', res.data);
        }).catch((err) => {
            
        })
    },
};
export const mutations = {
    setPosts(state, payload) {
        state.posts = payload;
    }

},