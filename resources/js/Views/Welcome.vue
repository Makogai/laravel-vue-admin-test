<template>
<div class="min-h-screen flex flex-col ">
    <div class="p-4 absolute flex  top-1 right-1 text-gray-500 text-sm font-semibold uppercase tracking-widest">
      <div v-if="user">
        <router-link class="px-6 " :to="{ name: 'home' }">
          Home
        </router-link>
      </div>
      <div v-else>
        <router-link class="px-6 " :to="{ name: 'login' }">
          Login
        </router-link>
        <router-link class="p-2 mr-4" :to="{ name: 'register' }">
          Register
        </router-link>
      </div>
    </div>

  
  </div>

</template>


<script>
export default {
    data() {
        return {
            auth : true 
        }
    },
    computed : {
      user() {
        return this.$store.getters.user ;
      }
    }
}
</script>
