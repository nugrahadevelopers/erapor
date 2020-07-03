<template>
  <div>
    <!-- disini saya menggunakan bootstrap untuk design tabel nya. secara default bootstrap sudah di include di file welcome.blade.php jadi saya tidak perlu lagi untuk import file nya -->
    <div class="row">
      <div class="col-md-12">
        <br>
        <br>
        <div class="row">
          <div class="col-md-10">
            <h4>Guru</h4>
          </div>
          <div class="col-md-2">
            <!-- push router ke form membuat data -->
            <router-link class="btn btn-primary w-100" to="/create">+ Tambah</router-link>
          </div>
        </div>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NIP</th>
              <th scope="col">NAMA</th>
              <th scope="col">Nomor HP</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <!-- menampilkan data ke table -->
            <tr v-for="guru in gurus" :key="guru.id">
              <td style="width:40%">{{guru.nip}}</td>
              <td style="width:40%">{{guru.name}}</td>
              <td style="width:40%">{{guru.phone}}</td>
              <td style="width:40%">{{guru.address}}</td>
              <td style="width:20%">
                <router-link class="btn btn-warning" :to="'/detail/'+guru.id">Update</router-link>
                <button class="btn btn-danger" v-on:click="deleteData(guru.id)">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<!-- script js -->
<script>
export default {
  data() {
    return {
      // variable array yang akan menampung hasil fetch dari api
      guru: []
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      // fetch data dari api menggunakan axios
      axios.get("http://localhost:8000/api/guru").then(response => {
        // mengirim data hasil fetch ke varibale array persons
        this.guru = response.data;
      });
    },
    deleteData(id) {
      // delete data
      axios.delete("http://localhost:8000/api/guru/" + id).then(response => {
        this.loadData();
      });
    }
  }
};
</script>