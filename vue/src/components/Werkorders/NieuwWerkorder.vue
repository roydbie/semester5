<template>
  <div style="height:100%;">
    <div style="width:50%;margin:auto;">
      <b-form @submit="onSubmit" @reset="onReset" v-if="show">
        <b-form-group
            id="input-group-1"
            label="Omschrijving"
            label-for="input-1"
            description="Voer een duidelijke omschrijving van het werkorder in."
        >
          <b-form-input
              id="input"
              v-model="form.omschrijving"
              type="email"
              placeholder=""
              required
          ></b-form-input>
        </b-form-group>

        <br>

        <b-button type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">Reset</b-button>
      </b-form>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      form: {
        omschrijving: '',
      },
      show: true
    }
  },
  mounted() {
    this.getAlleWerkorders();
  },
  methods: {
    async api(url) {
      try {
        const res = await axios.get(`${process.env.VUE_APP_BASE_URL}${url}`);
        return await res.data;
      } catch (e) { return e; }
    },
    getAlleWerkorders() {
      this.loadingWerkorders = true;
      let data = this.api("getAlleWerkorders");
      data.then(result => {
        for (let i = 0; i < Object.keys(result).length; i++) {
          this.items.push(result[i]);
        }
      }).then(() => this.loadingWerkorders = false);
    },
    onSubmit(event) {
      event.preventDefault()
      alert(JSON.stringify(this.form))
    },
    onReset(event) {
      event.preventDefault()
      this.form.omschrijving = '';
    }
  }
}
</script>

<style scoped>
label {
  font-size: 0.9rem!important;
}
input {
  font-size: 0.9rem!important;
}
.btn {
  margin-right:5px!important;
  font-size:0.9rem;
}
</style>