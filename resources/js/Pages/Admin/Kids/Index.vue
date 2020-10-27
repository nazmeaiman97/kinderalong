<template>
    <layout title="Welcome">
        <!-- Body of Dashboard -->
        <body class="font-sans bg-white z-10">
            <div class="container mx-auto sm:px-8 border-white">
                <div class="py-8">
                    <div class="mt-4 ">
                        <div class="flex flex-wrap -mx-6">
                            <div
                                class="w-full px-6 sm:w-1/2 xl:w-1/3 sm:content-center"
                            >
                                <div
                                    class="flex items-center px-5 py-6 shadow-lg text-black hover:bg-indigo-600 hover:text-white hover:shadow-2xl rounded-md bg-white sm:content-center"
                                    data-aos="flip-left"
                                >
                                    <div
                                        class="p-3 rounded-full bg-indigo-600 bg-opacity-75"
                                    >
                                        <svg
                                            class="h-8 w-8 text-white"
                                            viewBox="0 0 28 30"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                                fill="currentColor"
                                            ></path>
                                            <path
                                                d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                                fill="currentColor"
                                            ></path>
                                            <path
                                                d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                                fill="currentColor"
                                            ></path>
                                            <path
                                                d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                                fill="currentColor"
                                            ></path>
                                            <path
                                                d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                                fill="currentColor"
                                            ></path>
                                            <path
                                                d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold ">
                                            {{ kids_count }}
                                        </h4>
                                        <div>
                                            Total Students
                                        </div>
                                    </div>

                                    <div>
                                        <button
                                            type="button"
                                            class="mt-5 bg-indigo-500 border border-indigo-500 text-white  rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-black hover:bg-white transform hover:-translate-y-1 hover:scale-110 ..."
                                        >
                                            View
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0"
                            >
                                <div
                                    class="flex items-center px-5 py-6 shadow-lg text-black hover:bg-orange-600  hover:text-white rounded-md bg-white"
                                    data-aos="flip-left"
                                >
                                    <div
                                        class="p-3 rounded-full bg-orange-600 bg-opacity-75"
                                    >
                                        <svg
                                            class="w-8 h-8"
                                            fill="white"
                                            stroke="white"
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
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold ">
                                            200,521
                                        </h4>
                                        <div>
                                            New Students
                                        </div>
                                    </div>
                                    <div>
                                        <button
                                            type="button"
                                            class="mt-5 bg-orange-600 border border-orange-500 text-white  rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-black hover:bg-white transform hover:-translate-y-1 hover:scale-110 ..."
                                        >
                                            View
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0"
                            >
                                <div
                                    class="flex items-center px-5 py-6 shadow-lg  rounded-md bg-white  text-black hover:bg-pink-600  hover:text-white "
                                    data-aos="flip-left"
                                >
                                    <div
                                        class="p-3 rounded-full bg-pink-600 bg-opacity-75"
                                    >
                                        <svg
                                            class="w-8 h-8"
                                            fill="white"
                                            stroke="pink"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            ></path>
                                        </svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold">
                                            215,542
                                        </h4>
                                        <div>
                                            Financial
                                        </div>
                                    </div>
                                    <div>
                                        <button
                                            type="button"
                                            class="mt-5 bg-pink-600 border border-pink-500 text-white  rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-black hover:bg-white transform hover:-translate-y-1 hover:scale-110 ..."
                                        >
                                            View
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <!-- Body of Student List -->
        <body class="font-sans bg-gray-200">
            <div class="container mx-auto sm:px-8">
                <div class="py-8">
                    <div>
                        <h2 class="text-2xl font-semibold leading-tight">
                            Users
                        </h2>
                    </div>
                    <div class="my-2 flex sm:flex-row flex-col">
                        <div class="flex flex-row mb-1 sm:mb-0">
                            <div class="relative">
                                <select
                                    class="h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500"
                                >
                                    <option>All</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
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

                        <div class="block relative">
                            <span
                                class="h-full absolute inset-y-0 left-0 flex items-center pl-2"
                            >
                                <svg
                                    viewBox="0 0 24 24"
                                    class="h-4 w-4 fill-current text-gray-500"
                                >
                                    <path
                                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"
                                    ></path>
                                </svg>
                            </span>
                            <input
                                placeholder="Search"
                                class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                            />
                        </div>

                        <div class="item-left">
                            <button
                                type="button"
                                @click="openModal"
                                class="p-2 mx-3 bg-indigo-600 border border-idngo-500 text-white  rounded-md  transition duration-500 ease select-none hover:text-white hover:bg-indigo-800 transform hover:-translate-y-1 hover:scale-110 ..."
                            >
                                <svg
                                    class="w-5 h-5 inline-block"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                                Student
                            </button>
                        </div>
                    </div>

                    <div
                        class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto"
                    >
                        <div
                            class="inline-block min-w-full shadow rounded-lg overflow-hidden"
                        >
                            <!-- Header of Student List -->
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Student
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Gender
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Age
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Birthdate
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Package
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Register Date
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <!-- Body of Student List -->
                                <tbody>
                                    <tr v-for="kid in kids.data" :key="kid.id">
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 w-10 h-10"
                                                >
                                                    <img
                                                        class="w-full h-full rounded-full"
                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="ml-3">
                                                    <p
                                                        class="text-gray-900 whitespace-no-wrap"
                                                    >
                                                        {{ kid.full_name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ kid.gender }}
                                            </p>
                                        </td>
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ getAge(kid.birthdate) }} Year
                                                Old
                                            </p>
                                        </td>
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ kid.birthdate }}
                                            </p>
                                        </td>
                                        <td
                                            v-if="
                                                kid.package.name === 'Sunflower'
                                            "
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                                            >
                                                <span
                                                    aria-hidden
                                                    class="absolute inset-0 bg-yellow-400 opacity-50 rounded-full"
                                                ></span>
                                                <span class="relative">{{
                                                    kid.package.name
                                                }}</span>
                                            </span>
                                        </td>
                                        <td
                                            v-if="
                                                kid.package.name === 'Hibiscus'
                                            "
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                                            >
                                                <span
                                                    aria-hidden
                                                    class="absolute inset-0 bg-red-200 opacity-50 rounded-full"
                                                ></span>
                                                <span class="relative">{{
                                                    kid.package.name
                                                }}</span>
                                            </span>
                                        </td>

                                        <td
                                            v-if="
                                                kid.package.name === 'Rafflesia'
                                            "
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                                            >
                                                <span
                                                    aria-hidden
                                                    class="absolute inset-0 bg-orange-500 opacity-50 rounded-full"
                                                ></span>
                                                <span class="relative">{{
                                                    kid.package.name
                                                }}</span>
                                            </span>
                                        </td>

                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ kid.created_at }}
                                            </p>
                                        </td>
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <button
                                                class=" w-8 h-8 bg-indigo-600 rounded-full hover:bg-indigo-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none"
                                            >
                                                <svg
                                                    class="w-6 h-6 inline-block"
                                                    fill="white"
                                                    stroke="black"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1"
                                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                                                    ></path>
                                                </svg>
                                            </button>

                                            <button
                                                class=" w-8 h-8 bg-yellow-600 rounded-full hover:bg-yellow-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none"
                                            >
                                                <svg
                                                    class="w-6 h-6 inline-block"
                                                    fill="white"
                                                    stroke="black"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                                                    ></path>
                                                </svg>
                                            </button>
                                            <button
                                                class=" w-8 h-8 bg-red-600 rounded-full hover:bg-red-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none"
                                            >
                                                <svg
                                                    class="w-6 h-6 inline-block"
                                                    fill="white"
                                                    stroke="black"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagnination -->
                            <div
                                class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          "
                            >
                                <span class="text-xs xs:text-sm text-gray-900">
                                    Showing 1 to 5 of {{ kids_count }}
                                </span>
                                <div class="inline-flex mt-2 xs:mt-0">
                                    <pagination :links="kids.links" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Create new Student -->

            <transition name="fade">
                <div class="modal z-50" v-if="show">
                    <div class="modal__backdrop" @click="closeModal()" />

                    <div class="modal__dialog">
                        <div class=" bg-indigo-500 ">
                            <slot name="header" />



                            <button
                                type="button"
                                class="modal__close float-right"
                                @click="closeModal()"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 352 512"
                                    class="w-6 h-6 bg-red-600 inline-block"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"
                                    ></path>
                                </svg>
                            </button>
                            <h1 class="text-white font-bold uppercase text-center m-5">Register New Student</h1>
                        </div>

                        <div class="modal__body ">
                            <slot name="body" />
                            <!-- Start Form -->
                            <form  class="z-30 ">
                                <div
                                    class="justify-center text-center text-sm font-bold mb-2 uppercase"
                                >
                                    Package
                                </div>
                                <div class="flex flex-wrap -mx-3 ">
                                    <div
                                        class="container mx-auto flex justify-center mb-10"
                                    >
                                        <div
                                            class="radio-group inline-flex  flex-row flex-initial justify-center rounded-lg shadow-md"
                                        >
                                            <div
                                                class="radio bg-white border border-grey border-l-0"
                                            >
                                                <input
                                                    type="radio"
                                                    id="Sunflower"
                                                    name="package"
                                                    value="1"
                                                    v-model="form.package_id" :error="errors.package_id"
                                                    checked
                                                />
                                                <label
                                                    for="Sunflower"
                                                    class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32"
                                                >
                                                    <div class="text-3xl mb-2">
                                                        🌻
                                                    </div>
                                                    <div
                                                        class="font-semibold uppercase tracking-wide"
                                                    >
                                                        <strong
                                                            >Sunflower</strong
                                                        >
                                                    </div>
                                                </label>
                                            </div>
                                            <div
                                                class="radio bg-white border border-grey border-l-0"
                                            >
                                                <input
                                                    type="radio"
                                                    id="Hibiscus"
                                                    name="package"
                                                     v-model="form.package_id" :error="errors.package_id"
                                                    value="2"
                                                />
                                                <label
                                                    for="Hibiscus"
                                                    class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32"
                                                >
                                                    <div class="text-3xl mb-2">
                                                        🌺
                                                    </div>
                                                    <div
                                                        class="font-semibold uppercase tracking-wide"
                                                    >
                                                        <strong
                                                            >Hibiscus</strong
                                                        >
                                                    </div>
                                                </label>
                                            </div>
                                            <div
                                                class="radio bg-white border border-grey border-l-0"
                                            >
                                                <input
                                                    type="radio"
                                                    id="rafflesia"
                                                    name="package"
                                                    v-model="form.package_id" :error="errors.package_id"
                                                    value="3"
                                                />
                                                <label
                                                    for="rafflesia"
                                                    class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32"
                                                >
                                                    <div class="text-3xl mb-2">
                                                        🏵️
                                                    </div>
                                                    <div
                                                        class="font-semibold uppercase tracking-wide"
                                                    >
                                                        <strong
                                                            >Rafflesia</strong
                                                        >
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="justify-center text-center text-sm font-bold mb-2 uppercase"
                                >
                                    Gender
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div
                                        class="container mx-auto flex justify-center"
                                    >
                                        <div
                                            class="radio-group inline-flex  flex-row flex-initial justify-center rounded-lg shadow-md"
                                        >
                                            <div class="radio">
                                                <input
                                                    type="radio"
                                                    id="Male"
                                                    name="gender"
                                                    value="Male"
                                                     v-model="form.gender" :error="errors.gender"
                                                    checked
                                                />
                                                <label
                                                    for="Male"
                                                    class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32"
                                                >
                                                    <div class="text-3xl mb-2">
                                                        👦🏻
                                                    </div>
                                                    <div
                                                        class="font-semibold uppercase tracking-wide"
                                                    >
                                                        <strong>Male</strong>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <input
                                                    type="radio"
                                                    id="Female"
                                                    name="gender"
                                                    value="Female"
                                                    v-model="form.gender" :error="errors.gender"
                                                />
                                                <label
                                                    for="Female"
                                                    class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32"
                                                >
                                                    <div class="text-3xl mb-2">
                                                        👧🏻
                                                    </div>
                                                    <div
                                                        class="font-semibold uppercase tracking-wide"
                                                    >
                                                        <strong>Female</strong>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap -mx-3 mb-10">
                                    <div class="w-full md:w-1/2 px-3   md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-first-name"
                                        >
                                            Full Name
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            id="grid-first-name"
                                            type="text"
                                            v-model="form.full_name" :error="errors.full_name"
                                            placeholder="Jane"
                                        />
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-last-name"
                                        >
                                            Birhtdate
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-last-name"
                                            type="date"
                                            v-model="form.birthdate" :error="errors.birthdate"
                                            placeholder="Doe"
                                        />
                                    </div>
                                </div>

                                <div class="flex flex-wrap -mx-3 mb-2">
                                    <div
                                        class="w-full  px-3 md:w-1/2 mb-6 md:mb-0"
                                    >
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-city"
                                        >
                                            Birth Certification Number
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-city"
                                            type="text"
                                             v-model="form.no_birth_cert" :error="errors.no_birth_cert"
                                            placeholder="Albuquerque"
                                        />
                                    </div>

                                    <div
                                        class="w-full  px-3 md:w-1/2 mb-6 md:mb-0"
                                    >
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-city"
                                        >
                                            My Kid Number
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-city"
                                            type="text"
                                             v-model="form.no_mykid" :error="errors.no_mykid"
                                            placeholder="Albuquerque"
                                        />
                                    </div>
                                </div>


                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-zip"
                                    >
                                        Upload Image
                                    </label>
                                    <input
                                        class=""
                                        id="grid-zip"
                                        type="file"

                                    />
                                </div>

                                <div class="flex flex-wrap  mb-2">
                                    <div
                                        class="w-full md:w-1/3 px-3 mb-6 md:mb-0"
                                    >
                              <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" @click="save(form)">
                                Save
                              </button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Form-->
                        </div>

                        <div class="modal__footer">
                            <slot name="footer" />
                        </div>
                    </div>
                </div>
            </transition>
        </body>
    </layout>
</template>

<script>
import Layout from "../../../Shared/Layout";
import Pagination from "../../../Shared/Pagination";

export default {
    props: {
        kids: Object,
        kids_count: Number,
        errors: Object,
    },
    data() {
        // <== changed this line
        return {
            show: false,
            form: {
                     full_name: null,
                    birthdate: null,
                     no_mykid: null,
                    place_birth: null,
                     gender: null,
                     no_birth_cert: null,
                     package_id:null,
                     photo:null,
                     place_birth:null

      },
        };
    },
    components: {
        Layout,
        Pagination
    },
    methods: {
        getAge: function(dateString) {
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        },

        closeModal() {
            this.show = false;
            document.querySelector("body").classList.remove("overflow-hidden");
        },
        openModal() {
            this.show = true;
            document.querySelector("body").classList.add("overflow-hidden");
        },
       save: function (kids) {
                this.$inertia.post('/kids', kids)

                this.closeModal();

            },
    }
};
</script>

<style lang="scss" scoped>
.modal {
    overflow-x: hidden;
    overflow-y: auto;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 9;
    &__backdrop {
        background-color: rgba(0, 0, 0, 0.3);
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
    }
    &__dialog {
        background-color: #ffffff;
        position: relative;
        width: 600px;
        margin: 50px auto;
        display: flex;
        flex-direction: column;
        border-radius: 5px;
        z-index: 2;
        @media screen and (max-width: 992px) {
            width: 90%;
        }
    }

    &__header {
        padding: 20px 20px 10px;

        align-items: flex-start;
        justify-content: space-between;

    }
    &__body {
        padding: 10px 20px 10px;
        overflow: auto;
        display: flex;
        flex-direction: column;
        align-items: stretch;
    }
    &__footer {
        padding: 10px 20px 20px;
    }
}
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s;
}
.fade-enter,
.fade-leave-to {
    opacity: 0;
}

input[type="radio"]:checked + label {
    color: white; //text-green-dark
}

.radio-group .radio:first-child {
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
}

.radio-group .radio:last-child {
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
}

.radio-group .radio {
    position: relative;
}

.radio input {
    visibility: hidden;
    position: absolute;
}

.radio label:hover {
    cursor: pointer;
}

.radio input:checked + label {
    border-color: #38c172;
    background-color: #e3fcec;
}

.radio-group .radio:first-child {
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
}

.radio-group .radio:last-child {
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
}

.radio-group .radio {
    position: relative;
}

.radio input {
    visibility: hidden;
    position: absolute;
}

.radio label:hover {
    cursor: pointer;
}

.radio input:checked + label {
    border-color: black;
    border: 2em;
    background-color: #5a67d8;
}
</style>
