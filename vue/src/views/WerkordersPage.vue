<template>
  <div class="tabel-container mt-3">
    <b-table striped hover :items="items"></b-table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      items: [
        { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
        { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
        { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
        { age: 38, first_name: 'Jami', last_name: 'Carney' }
      ],
      loadingWerkorders: false,
      werkorders: []
    }
  },
  mounted() {
    this.getAlleWerkorders();
  },
  methods: {
    async api() {
      try {
        const res = await axios.get(`${process.env.VUE_APP_BASE_URL}getAlleWerkorders`);
        return await res.data;
      } catch (e) { return e; }
    },
    getAlleWerkorders() {
      this.loadingWerkorders = true;
      let data = this.api();
      data.then(result => {
        console.log(result);
      }).then(() => this.loadingWerkorders = false);
    },
  }
}
</script>

<style scoped>
.tabel-container {
  width: 80%;
  margin:auto;
}
</style>