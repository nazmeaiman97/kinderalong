<template>

<transition name="fade">
    <div class="modal" v-if="show">
      <div class="modal__backdrop" @click="closeModal()"/>

      <div class="modal__dialog">
        <div class="modal__header">
          <slot name="header"/>
          <button type="button" class="modal__close" @click="closeModal()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" class="w-6 h-6">
              <path
                fill="currentColor"
                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"
              ></path>
            </svg>
          </button>
        </div>

    <div class="modal__body ">
          <slot name="body"/>
    <form class="z-40 " >

    <div class="justify-center text-center text-sm font-bold mb-2 uppercase">Package</div>
    <div class="flex flex-wrap -mx-3 ">

        <div class="container mx-auto flex justify-center mb-10">

            <div class="radio-group inline-flex  flex-row flex-initial justify-center rounded-lg shadow-md">
                <div class="radio bg-white border border-grey border-l-0">
                    <input type="radio" id="Sunflower" name="package" value="1" wire:model="package_id" checked>
                    <label for="Sunflower" class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32">
                        <div class="text-3xl mb-2">🌻</div>
                      <div class="font-semibold uppercase tracking-wide"><strong>Sunflower</strong></div>
                    </label>
                </div>
                <div class="radio bg-white border border-grey border-l-0">
                    <input type="radio" id="Hibiscus" name="package" wire:model="package_id" value="2">
                    <label for="Hibiscus" class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32">
                        <div class="text-3xl mb-2">🌺</div>
                      <div class="font-semibold uppercase tracking-wide"><strong>Hibiscus</strong></div>
                    </label>
                </div>
                <div class="radio bg-white border border-grey border-l-0">
                    <input type="radio" id="rafflesia" name="package" wire:model="package_id" value="3">
                    <label for="rafflesia" class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32">
                        <div class="text-3xl mb-2">🏵️</div>
                      <div class="font-semibold uppercase tracking-wide"><strong>Rafflesia</strong></div>
                    </label>
                </div>
            </div>

        </div>

    </div>


    <div class="justify-center text-center text-sm font-bold mb-2 uppercase">Gender</div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="container mx-auto flex justify-center">

            <div class="radio-group inline-flex  flex-row flex-initial justify-center rounded-lg shadow-md">
                <div class="radio">
                    <input type="radio" id="Male" name="gender" value="Male" wire:model="gender" checked>
                    <label for="Male" class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32">
                        <div class="text-3xl mb-2">👦🏻</div>
                      <div class="font-semibold uppercase tracking-wide"><strong>Male</strong></div>
                    </label>
                </div>
                <div class="radio">
                    <input type="radio" id="Female" name="gender" value="Female" wire:model="gender">
                    <label for="Female" class="block text-center px-4 py-3 bg-white  border-grey border-solid border-2 w-32 h-32">
                        <div class="text-3xl mb-2">👧🏻</div>
                      <div class="font-semibold uppercase tracking-wide"><strong>Female</strong></div>
                    </label>
                </div>
            </div>
        </div>

    </div>


        <div class="flex flex-wrap -mx-3 mb-10">
            <div class="w-full md:w-1/2 px-3   md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Full Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" wire:model="s_name" placeholder="Jane">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Birhtdate
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="date" wire:model="birtdate" placeholder="Doe">
            </div>
        </div>

            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full  px-3 md:w-1/2 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Birth Certification Number
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="text" wire:model="no_birth_cert" placeholder="Albuquerque">
                </div>


                <div class="w-full  px-3 md:w-1/2 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        My Kid Number
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="text" wire:model="no_mykid" placeholder="Albuquerque">
                </div>





            </div>

            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city"  >
                    City
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" wire:model="city" type="text" placeholder="Albuquerque">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state" >
                    State
                  </label>
                  <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model="state" id="grid-state">
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Malacca">Malacca</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Perak">Perak</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Penang">Penang</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Selangor" selected="selected">Selangor</option>
                        <option value="Terengganu">Terengganu</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    Zip
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" wire:model="zipcode" type="text" placeholder="90210">
                </div>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    Upload Image
                </label>
                <input class="" id="grid-zip" type="file" wire:model="image">
            </div>



              <div class="flex flex-wrap  mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <button  class="bg-transparent hover:bg-indigo-500 text-indigo-700 font-semibold hover:text-white py-2 px-4 border border-indigo-500 hover:border-transparent rounded">
                Save
              </button>
                </div>
            </div>

            <slot="addStudent"/>
            </form>
        </div>

        <div class="modal__footer">
          <slot name="footer"/>
        </div>
      </div>
    </div>
  </transition>

</template>

<script>
export default {
     data() {                                   // <== changed this line
      return {
            show: false
      }
    },
methods:{
      closeModal() {
      this.show = false;
      document.querySelector("body").classList.remove("overflow-hidden");
    },
    openModal() {
      this.show = true;
      document.querySelector("body").classList.add("overflow-hidden");
         }
    }
}
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
  &__close {
    width: 30px;
    height: 30px;
  }
  &__header {
    padding: 20px 20px 10px;
    display: flex;
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

        input[type="radio"]:checked+label {
            color:white; //text-green-dark
        }

        .radio-group .radio:first-child{
	border-top-left-radius: 0.5rem;
	border-bottom-left-radius: 0.5rem;
}

.radio-group .radio:last-child{
	border-top-right-radius: 0.5rem;
	border-bottom-right-radius: 0.5rem;
}

.radio-group .radio{
	position: relative;
}

.radio input{
	visibility: hidden;
	position: absolute;

}

.radio label:hover{
  cursor: pointer;
}

.radio input:checked + label{
  border-color:#38C172;
	background-color:#E3FCEC;
}

  .radio-group .radio:first-child{
	border-top-left-radius: 0.5rem;
	border-bottom-left-radius: 0.5rem;
}

.radio-group .radio:last-child{
	border-top-right-radius: 0.5rem;
	border-bottom-right-radius: 0.5rem;
}

.radio-group .radio{
	position: relative;
}

.radio input{
	visibility: hidden;
	position: absolute;

}

.radio label:hover{
  cursor: pointer;
}

.radio input:checked + label{
  border-color:black;
border:2em;
	background-color:#5a67d8;

}
</style>
