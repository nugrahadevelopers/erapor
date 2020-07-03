<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br>
        <br>
        <h4>Update data</h4>
        <br>
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function updateData() -->
        <form @submit.prevent="updateData()">
          <div class="form-group">
            <label>NIP</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your first name"
              v-model="form.nip"
              required
            >
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your first name"
              v-model="form.name"
              required
            >
          </div>
          <div class="form-group">
            <label>Nomor HP</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your last name"
              v-model="form.phone"
              required
            >
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your last name"
              v-model="form.alamat"
              required
            >
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
         nip: "",
        name: "",
        phone: "",
        address: ""
      }
    };
  },
  created() {
    // load data saat pertama kali halaman dibuka
    this.loadData();
  },
  methods: {
    loadData() {
      // load data berdasarkan id
      axios
        .get("http://localhost:8000/api/guru/" + this.$route.params.id)
        .then(response => {
          // post value yang dari response ke form
          this.form.nip = response.data.nip;
          this.form.name = response.data.name;
          this.form.phone = response.data.phone;
          this.form.address = response.data.address;
        });
    },
    updateData() {
      // put data ke api menggunakan axios
      axios
        .put("http://localhost:8000/api/guru/" + this.$route.params.id, {
          nip: this.form.nip,
          name: this.form.name,
          phone: this.form.phone,
          address: this.form.address,
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/");
        });
    }
  }
};
</script>