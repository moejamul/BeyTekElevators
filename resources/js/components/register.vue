<template>
  <form method="POST" @submit.prevent="saveForm">
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input
        class="form-control"
        v-model="form.name"
        id="exampleInputEmail1"
        aria-describedby="emailHelp"
        placeholder="Enter Name"
      />
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input
        type="email"
        class="form-control"
        v-model="form.email"
        id="exampleInputEmail1"
        aria-describedby="emailHelp"
        placeholder="Enter email"
      />
      <small id="emailHelp" class="form-text text-muted"
        >We'll never share your email with anyone else.</small
      >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input
        type="password"
        v-model="form.password"
        class="form-control"
        id="exampleInputPassword1"
        placeholder="Password"
      />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</template>

</template>

<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        password: "",
      },
      errors: [],
    };
  },
  methods: {
    saveForm() {
      axios
        .post("http://localhost/beytekelevators/public/api/addusers", this.form)
        .then(() => {
          console.log("saved");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>