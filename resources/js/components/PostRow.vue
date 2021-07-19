<template>
  <tr>
    <td class="border px-4 py-2">{{ id }}</td>
    <td class="border px-4 py-2">{{ title }}</td>
    <td class="border px-4 py-2">{{ body }}</td>
    <td class="border px-4 py-2"> 
            <div v-for="category in categories" :key="category.id">
                {{ category.name }}
            </div>
         </td>
    <td class="border px-4 py-2">{{ user }}</td>     
    <td class="border px-4 py-2">
      <button
        class="
          bg-blue-500
          hover:bg-blue-700
          text-white
          font-bold
          py-2
          px-4
          rounded
        "
      >
        Edit
      </button>
      <button
        class="
          bg-red-500
          hover:bg-red-700
          text-white
          font-bold
          py-2
          px-4
          rounded
        "
      >
        Delete
      </button>
    </td>
  </tr>
</template>

<script>
export default {
    props:{
        id: Number,
        title: String,
        body: String,
        categories: Array,
        user: String,
    },
};
</script>

<style lang="scss" scoped>
</style>