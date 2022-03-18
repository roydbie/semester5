<template>
  <div style="height:100%;">
    <div class="button-container">
      <router-link :to="'/werkorders/nieuw'" class="btn btn-success ">Nieuw werkorder</router-link>
      <b-button variant="warning">Filter werkorders</b-button>
    </div>
    <div class="tabel-container mt-3">
      <b-spinner v-if="loadingWerkorders === true" style="width: 2rem; height: 2rem;margin-left:49%;margin-bottom:20px;"></b-spinner>
      <b-table
          v-else
          striped
          hover
          :items="items"
          :fields="fields"
          sticky-header="100%"
          class="table-class"
          label-sort-asc=""
          label-sort-desc=""
          label-sort-clear=""
      >
      </b-table>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      items: [],
      fields: [
        { key: "id", label: "ID", sortable: false},
        { key: "omschrijving", label: "Omschrijving", sortable: false },
        { key: "aanmaakdatum", label: "Aanmaakdatum", sortable: true },
        { key: "aanmaaktijd", label: "Aanmaaktijd", sortable: false },
        { key: "plandatum", label: "Plandatum", sortable: true },
        { key: "plantijd", label: "Plantijd", sortable: false },
        { key: "status_id", label: "Status id", sortable: true },
        { key: "locatie_id", label: "Locatie id", sortable: true },
      ],
      loadingWerkorders: false,
      locaties: []
    }
  },
  mounted() {
    this.getAlleWerkorders();
    this.getAlleLocaties();
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
    getAlleLocaties() {
      this.loadingWerkorders = true;
      let data = this.api("getAlleLocaties");
      data.then(result => {
        for (let i = 0; i < Object.keys(result).length; i++) {
          this.locaties.push(result[i]);
        }
      }).then(() => this.loadingWerkorders = false);
    },
  }
}
</script>

<style scoped>
.button-container {
  margin:auto;
}

.button-container .btn {
  margin-right:5px!important;
  font-size:0.9rem;
}

.table-class {
  border-bottom: 2px solid #dedede;
  border-top: 2px solid #dedede;
  cursor:pointer;
}

.tabel-container {
  width: 100%;
  margin:auto;
  padding:10px;
  height:90%;
  max-height:90%;
}

.form-select {
  font-size: 0.9rem!important;
}
</style>