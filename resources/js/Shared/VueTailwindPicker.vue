<template>
<div>
        <VueTailwindPicker
            @change="(v) => checkin = v"
        >
            <input type="text" v-model="checkin" />
        </VueTailwindPicker>
    </div>
</template>

<script>
import VueTailwindPicker from 'vue-tailwind-picker'
export default {
 components: {
    VueTailwindPicker
  },
  data(){
    return {
        checkin: '',
    }
  }
}
</script>

<style>

</style>
