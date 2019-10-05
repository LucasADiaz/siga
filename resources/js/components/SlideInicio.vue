<template>
  <v-carousel cycle continuous :show-arrows=false height="400" interval=3000>
    <v-carousel-item
      v-for="(item,i) in items"
      :key="i"
      :src="item.src"
    ></v-carousel-item>
  </v-carousel>
</template>


<script>
  export default {
    data () {
      return {
        items: [
          {
            src: 'img/img1.jpg',
          },
          {
            src: 'img/img2.jpg',
          },
        ],
      }
    },
  }
</script>