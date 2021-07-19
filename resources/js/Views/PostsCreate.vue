<template>
    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div
                class="
                    rounded-tl-3xl
                    bg-gradient-to-r
                    from-blue-900
                    to-gray-800
                    p-4
                    shadow
                    text-2xl text-white
                "
            >
                <h3 class="font-bold pl-2">
                    <router-link :to="{ name: 'posts' }">Posts</router-link> -
                    <router-link :to="{ name: 'posts.create' }"
                        >New Post</router-link
                    >
                </h3>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full  p-6">
                <!-- This element is to trick the browser into centering the modal contents. -->

                
   <div class="w-full">
     <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
       <form action="">
         <div class="mb-5">
           <label for="title" class="block mb-2 font-bold text-gray-600">Title</label>
           <input type="text" id="title" name="title" placeholder="Post title." class="border border-gray-300 shadow p-3 w-full rounded mb-">
         </div>

         <div class="mb-5">
           <label for="Body" class="block mb-2 font-bold text-gray-600">Body</label>
           <textarea type="text" id="Body" name="Body" placeholder="Body." class="border border-red-300 shadow p-3 w-full rounded mb-"></textarea>
           <!-- <p class="text-sm text-red-400 mt-2">Twitter username is required</p> -->
         </div>

         <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
       </form>
     </div>
   </div>
 </div>


        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
};
</script>
