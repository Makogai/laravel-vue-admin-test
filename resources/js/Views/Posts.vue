<template>
    <div  class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
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
                <h3 class="font-bold pl-2">Posts</h3>
            </div>
        </div>

        <div class="py-12">
            <div ref="formContainer" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="
                        bg-white
                        overflow-hidden
                        shadow-xl
                        sm:rounded-lg
                        px-4
                        py-4
                    "
                >
                    <!-- if session -->
                    <!-- <div
            class="
              bg-teal-100
              border-t-4 border-teal-500
              rounded-b
              text-teal-900
              px-4
              py-3
              shadow-md
              my-3
            "
            role="alert"
          >
            <div class="flex">
              <div>
                <p class="text-sm">Test</p>
              </div>
            </div>
          </div> -->
                    <router-link
                        :to="{ name: 'posts.create' }"
                        class="
                            bg-blue-500
                            hover:bg-blue-700
                            text-white
                            font-bold
                            py-2
                            px-4
                            rounded
                            my-3
                        "
                    >
                        Create New Post
                    </router-link>
                    <table  class="table-fixed w-full mt-5">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 w-20">No.</th>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Body</th>
                                <th class="px-4 py-2">Categories</th>
                                <th class="px-4 py-2">User</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <post-row
                                v-for="post in posts.data"
                                :key="post.id"
                                :id="post.id"
                                :title="post.title"
                                :body="post.body"
                                :categories="post.categories"
                                :user="post.user.name"
                            >
                            </post-row>
                        </tbody>
                        <div class="mt-4">
                        <v-pagination
                            class="w-full mt-3"
                            style="flex-wrap: nowrap!important"
                            v-model="page"
                            :pages="last_page"
                            :range-size="1"
                            active-color="#DCEDFF"
                            @update:modelValue="getPosts"
                        />
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PostRow from "../components/PostRow.vue";
import VPagination from "@hennge/vue3-pagination";
import "@hennge/vue3-pagination/dist/vue3-pagination.css";
export default {
    data() {
        return {
            modal: false,
            posts: [],
            page: 1,
            total: 0,
            per_page: 0,
            last_page: 0,
            fullPage: false,
        };
    },
    mounted() {
        this.getPosts();
    },
    components: {
        PostRow,
        VPagination,
    },
    methods: {
        getPosts(page = 1) {
             let loader = this.$loading.show({
                    // Optional parameters
                    container:this.fullPage,
                    // canCancel: true,
                    // onCancel: this.onCancel,
                });
            axios
                .get("/api/posts?page=" + page)
                .then((res) => {

                    this.posts = res.data;
                    this.total = res.data.meta.total;
                    this.per_page = res.data.meta.per_page;
                    this.last_page = res.data.meta.last_page;
                    loader.hide()
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>
<style scoped></style>
