<template>
  <div>
      <Layout title="Create New Event">
          <!-- Root element for center items -->
                <div class="flex flex-col h-screen bg-gray-100">
                    <!-- Auth Card Container -->
                    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
                        <!-- Auth Card -->
                        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
                            px-6 py-10 sm:px-10 sm:py-6
                            bg-white rounded-lg shadow-md lg:shadow-lg">

                            <!-- Card Title -->
                            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                                Create New Event
                            </h2>

                            <form class="mt-10" method="POST">
                                <!-- Email Input -->
                                <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">Title</label>
                                <input id="email" type="text" name="title" placeholder="Event Title" autocomplete="title"
                                    class="block w-full py-3 px-1 mt-2
                                    text-gray-800 appearance-none
                                    border-b-2 border-gray-100
                                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                                    required />


                                <div class="grid grid-cols-2 gap-4">
                                <div>
                                <label for="email" class="block text-xs font-semibold text-gray-600 uppercase mt-4">Start</label>
                                    <div class="mt-4">

                                        <DatePicker v-model="start.date" mode="dateTime" :timezone="start.timezone" />

                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-semibold text-gray-600 uppercase mt-4">End</label>
                                        <div class="mt-4">
                                            <DatePicker v-model="end.date" mode="dateTime" :timezone="end.timezone" />

                                    </div>
                                </div>
                            </div>

                                <!-- Submit Buttton -->
                                <button type="submit"
                                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                                    font-medium text-white uppercase
                                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                                    Submit
                                </button>

                                <!-- Another Auth Routes -->
                                <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
      </Layout>
  </div>
</template>

<script>
 import Layout from '../Layout';

export default {

     components: {
      Layout,

    },
    data() {
        return {
            start:{
             date: new Date(),
             timezone: '',
            },
            end:{
             date: new Date(),
             timezone: '',
            },

        }
    },
    mounted(){
        console.log("this is event");
    },
}
</script>

<style>

</style>
