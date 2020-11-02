<template>
    <div id="app">
        <div class="w-full md:w-1/3 pb-10 px-3 mb-6 md:mb-0">
            <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="grid-name"
            >
                do student have any allergy?
            </label>
            <input
                v-model="check_allergy"
                type="radio"
                id="yes"
                name="check_allergy"
                value="true"
            />
            <label for="yes">Yes</label>
            <input
                v-model="check_allergy"
                type="radio"
                id="no"
                name="check_allergy"
                value="false"
            />
            <label for="no">No</label>
        </div>
        <div
            class="flex flex-wrap -mx-3 mb-10"
            v-show="check_allergy == 'true'"
            v-for="(allergy, k) in allergies"
            :key="k"
        >
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-name"
                >
                    Allergy Type
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-indigo-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none hover:bg-white focus:bg-white focus:border-gray-500"
                        v-model="allergy.name"
                    >
                        <option value="" disabled selected
                            >Select your option</option
                        >

                        <option value="Drug Allergy">Drug Allergy</option>
                        <option value="Food Allergy">Food Allergy</option>
                        <option value="Insect Allergy">Insect Allergy</option>
                        <option value="Latex Allergy">Latex Allergy</option>
                        <option value="Mold Allergy">Mold Allergy</option>
                        <option value="Pet Allergy">Pet Allergy</option>
                        <option value="Pollen Allergy">Pollen Allergy</option>
                        <option value="Other">Other</option>
                    </select>
                    <p class="text-red-700 italic"></p>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                    >
                        <svg
                            class="fill-current h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                            />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-description"
                >
                    Specific Description
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-description"
                    v-model="allergy.description"
                    type="text"
                    placeholder="Specific Description"
                />
                <p class="text-red-700 italic"></p>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 xl:pt-8 md:pt-5 md:mb-0">
                <button
                    @click="remove(k)"
                    v-show="k || (!k && allergies.length > 1)"
                    class="px-2 py-2 bg-red-500 hover:bg-red-700 rounded-sm text-xs font-medium text-white"
                >
                    <svg
                        class="w-4 h-4 inline-block"
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
                </button>

                <button
                    @click="add(k)"
                    v-show="k == allergies.length - 1"
                    class="px-2 py-2  bg-green-500 hover:bg-green-700 rounded-sm text-xs font-medium text-white"
                >
                    <svg
                        class="w-5 h-4 inline-block"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            check_allergy: false,
            allergies: [
                {
                    name: "",
                    description: ""
                }
            ]
        };
    },

    methods: {
        add() {
            this.allergies.push({
                name: "",
                description: ""
            });
            console.log(this.allergies);
        },

        remove(index) {
            this.allergies.splice(index, 1);
        }
    }
};
</script>

<style scoped></style>
