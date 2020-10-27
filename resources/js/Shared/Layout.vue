<template >
<!-- component -->
<nav class="">
  <div class="  max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-indigo-600">
    <div class=" top-0 z-20  relative flex items-center justify-between h-16">


      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <!--
            Heroicon name: menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class=" block h-6 w-6" v-on-clickaway = "menuAway" @click = "openMenu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon when menu is open. -->
          <!--
            Heroicon name: x

            Menu open: "block", Menu closed: "hidden"
          -->

        </button>
         <!--
            Mobile menu if clicked showned

            Menu open: "block", Menu closed: "hidden"
          -->
            <div class="origin-top-left absolute left-0 mt-40 w-64 rounded-md shadow-lg" v-show="!seenMenu" data-aos="fade-left">
            <div class="py-1 rounded-md bg-indigo-700 shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
              <inertia-link href="/" class="block px-4 py-2 text-sm leading-5 text-white  hover:bg-gray-500 focus:outline-none focus:bg-gray-100 focus:text-black  transition duration-150 ease-in-out" role="menuitem">
                   <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                   Register New

             </inertia-link>
                <inertia-link href="/" class="block px-4 py-2 text-sm leading-5 text-white hover:bg-gray-500 focus:outline-none focus:bg-gray-100 focus:text-black transition duration-150 ease-in-out" role="menuitem">
                  <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                  Dashboard</inertia-link>
              <inertia-link href="/" class="block px-4 py-2 text-sm leading-5 text-white hover:bg-gray-500 focus:outline-none focus:bg-gray-100 focus:text-black  transition duration-150 ease-in-out" role="menuitem">
                  <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  Calendar</inertia-link>
            </div>
          </div>
      </div>



      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0">
          <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-dark.svg" alt="Workflow logo">
          <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-on-dark.svg" alt="Workflow logo">
        </div>
        <div class=" hidden sm:block sm:ml-6">
          <div class="flex">
           <inertia-link href="/" class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-black focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out">Dashboard</inertia-link>
            <inertia-link href="/" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Register New</inertia-link>
           <inertia-link href="/" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Calendar</inertia-link>

          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out" aria-label="Notifications" >
          <!-- Heroicon name: bell -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>



        <!-- Profile dropdown -->
        <div class="ml-3 relative">
          <div>
            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out" id="user-menu" aria-label="User menu" aria-haspopup="true">
              <img class="h-8 w-8 rounded-full" v-on-clickaway = "profileAway" @click = "openProfile" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>
          <!--
            Profile dropdown panel, show/hide based on dropdown state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg " v-show="!seenProfile" data-aos="fade-left">
            <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
             <inertia-link href="/" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Your Profile</inertia-link>
              <inertia-link href="/" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Settings</inertia-link>
              <inertia-link href="/" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Sign out</inertia-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div class="hidden sm:hidden">
    <div class="px-2 pt-2 pb-3">
      <inertia-link href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Dashboard</inertia-link>
      <inertia-link href="/" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Team</inertia-link>
      <inertia-link href="/" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Projects</inertia-link>
     <inertia-link href="/" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Calendar</inertia-link>
    </div>
  </div>


<article >
      <slot />
    </article>
</nav>
</template>

<script>
import { mixin as clickaway } from 'vue-clickaway';

export default {
  mixins: [ clickaway ],
  data(){
      return{
        seenProfile:true,
        seenMenu:true,
      }
  },
  template: '<p v-on-clickaway="away" v-on-clickaway="menuAway">Click away</p>',
  methods: {
    profileAway: function() {
        this.seenProfile = true;

    },
    openProfile: function(){
      this.seenProfile = !this.seenProfile;
    },

    menuAway: function() {

        this.seenMenu = true;
    },
    openMenu: function(){
      this.seenMenu = !this.seenMenu;
    },


  },
};
</script>

<style scoped>

</style>


