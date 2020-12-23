<template>
  <div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">phone number</th>
          <th scope="col">address</th>
          <th scope="col">profile picture</th>
        </tr>
      </thead>
      <tbody v-for="manager in managers" :key="manager.id">
        <!-- v-for is used to go through the buildings objects array, :key is the 
        unique values that is going to be attributes to every element -->
        <tr>
          <th scope="row">{{ manager.id }}</th>
          <td>{{ manager.name }}</td>
          <td>{{ manager.phone_number }}</td>
          <td>{{ manager.address }}</td>
          <td>{{ manager.profile_picture }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>


  <script>
export default {
  data() {
    return {
      managers: [], //defining the Managers objects array
      manager: {
        //defining the managers object and its attributes
        id: "",
        name: "",
        phone_number: "",
        address: "",
        profile_picture: "",
      },
    };
  },
  created() {
    this.fetchBuildings();
  },
  methods: {
    fetchBuildings(page_url) {
      let vm = this;
      page_url =
        page_url || "http://localhost/beytekelevators/public/api/listmanagers"; //fetching the records through API
      fetch(page_url)
        .then((res) => res.json())
        .then((res) => {
          this.managers = res; //passing the response into the elevators object
        });
    },
  },
};
</script>
