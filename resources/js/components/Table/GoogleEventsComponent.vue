<template>
  <div>
      <div class="">

        <div class=" bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">

                <div class="bg-white shadow-md rounded my-6">
                    <inertia-link :href="create_url" class="border  mt-6 border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">Create User</inertia-link>


                    <table class="min-w-max w-full table-auto mt-6">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Title</th>
                                <th class="py-3 px-6 text-left">Start</th>

                                <th class="py-3 px-6 text-center">End</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100" v-for="event in events" :key="event.id">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <span class="">{{event.name}}</span>
                                </td>
                                 <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <span class="">{{event.start}}</span>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <span class="">{{event.end}}</span>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <span class="">-</span>
                                </td>





                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    props:{
    events:{
        type:Object,
        required:true,
    },
    create_url:{
        type:String,
        required:true,
    },
    },
}
</script>

<style>
</style>
