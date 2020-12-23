<template>
  <form method="POST" @submit.prevent="submit" style="padding: 3em">
    <!-- @submit.prevent="submit" is calling the submit method defined in the script below -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Elevator Name</label>
        <input
          class="form-control"
          v-model="fields.name"
          placeholder="Elevator Name"
        />
        <!-- v-model is used to get the input values, and only works in input elements, fields
      is defined in the script below.
      "name" is one of the required attributes for us to do a post request through the API, it will be passed through
      fields, as written in the script below -->
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Index</label>
        <input
          class="form-control"
          v-model="fields.index"
          placeholder="Index"
        />
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Building</label>
        <input
          class="form-control"
          v-model="fields.building_id"
          placeholder="building_id"
        />
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</template>


<script>
export default {
  data() {
    return {
      fields: {},
    };
  },
  methods: {
    submit() {
      axios
        .post(
          "http://localhost/beytekelevators/public/api/addelevator",
          this.fields
        )
        .then((response) => {
          this.fields = {};
          this.success = true;
          this.errors = {};
        })
        .catch((error) => {
          if (error.response.status == 422) {
            this.errors = error.response.data.errors;
          }
          console.log("Error");
        });
    },
  },
};
</script>