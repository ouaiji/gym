<template>
    <app-layout>
        <div
            class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12"
        >
            <form @submit.prevent="handleSubmit">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div
                        class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10"
                    >
                        <div class="max-w-md mx-auto">
                            <div class="flex items-center space-x-5">
                                <div
                                    class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono"
                                >
                                    i
                                </div>
                                <div
                                    class="block pl-2 font-semibold text-xl self-start text-gray-700"
                                >
                                    <h2 class="leading-relaxed">
                                        Create an Event
                                    </h2>
                                    <p
                                        class="text-sm text-gray-500 font-normal leading-relaxed"
                                    >
                                        Lorem ipsum, dolor sit amet consectetur
                                        adipisicing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div
                                    class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7"
                                >
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="text-sm">Name</label>
                                            <div
                                                class="relative focus-within:text-gray-600 text-gray-400"
                                            >
                                                <input
                                                    type="text"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="Enter name"
                                                    v-model="lead.name"
                                                />
                                                <div
                                                    class="absolute left-3 top-2"
                                                >
                                                    <svg
                                                        class="w-5 h-5"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke="currentColor"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="text-sm"
                                                >Email Address</label
                                            >
                                            <div
                                                class="relative focus-within:text-gray-600 text-gray-400"
                                            >
                                                <input
                                                    type="text"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="example@mail.com"
                                                    v-model="lead.email"
                                                />
                                                <div
                                                    class="absolute left-3 top-2"
                                                >
                                                    <svg
                                                        class="h-5 w-5"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"
                                                        />
                                                        <path
                                                            d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="text-sm"
                                                >Phone Number</label
                                            >
                                            <div
                                                class="relative focus-within:text-gray-600 text-gray-400"
                                            >
                                                <input
                                                    type="text"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="Enter phone number"
                                                    v-model="lead.phone"
                                                />
                                                <div
                                                    class="absolute left-3 top-2"
                                                >
                                                    <svg
                                                        class="w-5 h-5"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="text-sm"
                                                >Date of Birth</label
                                            >
                                            <div
                                                class="relative focus-within:text-gray-600 text-gray-400"
                                            >
                                                <input
                                                    type="date"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="26/02/2000"
                                                    v-model="lead.dob"
                                                />
                                                <div
                                                    class="absolute left-3 top-2"
                                                >
                                                    <svg
                                                        class="w-5 h-5"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                        ></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="text-sm"
                                            >Interested package</label
                                        >
                                        <input
                                            type="text"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="Enter the package interested in"
                                            v-model="lead.package"
                                        />
                                    </div>
                                </div>
                                <div class="pt-4 flex items-center space-x-4">
                                    <button
                                        class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none"
                                    >
                                        <svg
                                            class="w-6 h-6 mr-3"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"
                                            ></path>
                                        </svg>
                                        Cancel
                                    </button>
                                    <button
                                        class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none"
                                    >
                                        Create
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from "../../Layouts/AppLayout.vue";
export default {
    components: { AppLayout },
    data() {
        return {
            lead: {
                name: "",
                email: "",
                phone: "",
                email: "",
                dob: "",
                package: ""
            }
        };
    },
    methods: {
        async handleSubmit() {
            let response = await this.$inertia.post("/leads/save", this.lead);
        }
    }
};
</script>
