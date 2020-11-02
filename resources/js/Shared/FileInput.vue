<template>
  <div>
    <label v-if="label" class="form-label">{{ label }}:</label>
    <div class="form-input p-0" :class="{ error: errors.length }">
      <input ref="file" type="file" :accept="accept" class="hidden" @change="change">
      <div v-if="!value" class="p-2 pt-2 inline-block">
          <div class="inline-block">
        <button type="button" class="px-2 py-1 inline-block bg-indigo-600 border border-indigo-500 text-white  rounded-md  transition duration-500 ease select-none hover:text-white hover:bg-indigo-800 transform hover:-translate-y-1 hover:scale-110 ..." @click="browse">
         <svg class="w-4 h-4 inline-block mb-1 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"></path></svg> Browse
        </button>
          </div>
        <div class="inline-block pt-4" v-show="form.gender === 'Male' && showExample == true ">
        <img src="storage/kids/Boyprofile.png" class="inline-block" alt="">
        </div>
        <div class="inline-block pt-4" v-show="form.gender === 'Female' && showExample == true">
        <img src="storage/kids/Girlprofile.png" class="inline-block" alt="">
        </div>
      </div>
      <div v-else class="flex items-center justify-between p-2">
        <div class="flex-1 pr-1">{{ value.name }} <span class="text-gray-500 text-xs">({{ filesize(value.size) }})</span></div>
        <button type="button" class="px-1  bg-red-500 hover:bg-red-700 rounded-sm text-xs font-medium text-white" @click="remove">
         <svg class="w-3 h-3 inline-block mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
      </div>
    </div>

    <div v-if="errors.length" class="form-error">{{ errors[0] }}</div>
     <!-- Cropper container -->
    <div
      v-if="this.imageSrc" v-show="showCropper"
      class="my-3 d-flex align-items-center justify-content-center w-full mx-auto"
    >
      <vue-cropper
        class="mr-2 w-50"
        ref="cropper"
        :guides="true"
        :src="imageSrc"
      ></vue-cropper>
    </div>
     <div>
      <img class="ml-2 w-50 bg-light" :src="croppedImageSrc" />
    </div>
    <button v-show="showCropButton" v-if="this.imageSrc" @click.prevent="cropImage" class="px-3 py-2 inline-block bg-yellow-500 hover:bg-yellow-700 rounded-sm text-xs font-medium text-white"><svg class="w-4 h-4 inline-block mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z"></path></svg>Crop </button>
  </div>
</template>

<script>
  import VueCropper from "vue-cropperjs"
  import "cropperjs/dist/cropper.css"
export default {
        components: {
      VueCropper,
    },
    data: function () {
      return {
        imageSrc: "",
        croppedImageSrc: "",
        showCropper:true,
        showExample:true,
        showCropButton:true

      }
    },
  props: {
    form:Object,
    value: Blob,
    label: String,
    accept: String,
    errors: {
      type: Array,
      default: () => [],
    },
  },
  watch: {
    value(value) {
      if (!value) {
        this.$refs.file.value = ''
      }
    },
  },
  methods: {
    filesize(size) {
      var i = Math.floor(Math.log(size) / Math.log(1024))
      return (size / Math.pow(1024, i) ).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i]
    },
    browse() {
      this.$refs.file.click()
    },
    change(e) {

      const file = e.target.files[0]
        if (!file.type.includes("image/")) {
          alert("Please select an image file")
          return
        }
        if (file.size >= 6242880) {
          alert("Cannot be more than 5 MB")
          return
        }
        if (typeof FileReader === "function") {
          const reader = new FileReader()
          reader.onload = event => {
            this.imageSrc = event.target.result
          }
            this.showCropper = true
           this.showExample = false
           this.showCropButton = true
          reader.readAsDataURL(file)
        } else {
          alert("Sorry, FileReader API not supported")
        }
    },
    remove() {
      this.$emit('input', null)
       this.imageSrc = ''
         this.croppedImageSrc = ''
         this.showExample = true
    },
  dataURItoBlob(dataURI) {
  // convert base64 to raw binary data held in a string
  // doesn't handle URLEncoded DataURIs - see SO answer #6850276 for code that does this
  var byteString = atob(dataURI.split(',')[1]);

  // separate out the mime component
  var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0]

  // write the bytes of the string to an ArrayBuffer
  var ab = new ArrayBuffer(byteString.length);

  // create a view into the buffer
  var ia = new Uint8Array(ab);

  // set the bytes of the buffer to the correct values
  for (var i = 0; i < byteString.length; i++) {
      ia[i] = byteString.charCodeAt(i);
  }

  // write the ArrayBuffer to a blob, and you're done
  var blob = new Blob([ab], {type: mimeString});
  return blob;

},
    cropImage(e) {
        // Get image data for post processing, e.g. upload or setting image src
        this.croppedImageSrc = this.$refs.cropper.getCroppedCanvas().toDataURL()
        this.$emit('input',  this.dataURItoBlob(this.$refs.cropper.getCroppedCanvas().toDataURL("image/jpeg",0.9)))
        this.showCropButton = false
        this.showCropper = false
      },
  },
}
</script>
