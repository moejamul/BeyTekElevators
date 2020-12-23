<template>
  <div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">index</th>
          <th scope="col">name</th>
          <th scope="col">building name</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody v-for="elevator in elevators" :key="elevator.id">
        <!-- v-for is used to go through the elevators objects array, :key is the 
        unique values that is going to be attributes to every element -->
        <tr>
          <th scope="row">{{ elevator.id }}</th>
          <td>{{ elevator.index }}</td>
          <td>{{ elevator.name }}</td>
          <td>{{ elevator.building.name }}</td>
          <td>{{ elevator.building.address }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>


  <script>
export default {
  data() {
    return {
      elevators: [], //defining the elevators objects array
      elevator: {
        //defining the elevators object attributes
        id: "",
        index: "",
        name: "",
        building_id: "",
        buildings: [], //defining the buildings objects array that is part of the elevator objects array (nested)
        building: {
          //defining the building object and its attributes
          id: "",
          name: "",
          floors: "",
          address: "",
          contact_number: "",
        },
      },
      elevator_id: "",
    };
  },
  created() {
    this.fetchElevators();
  },
  methods: {
    fetchElevators(page_url) {
      let vm = this;
      page_url =
        page_url ||
        "http://localhost/beytekelevators/public/api/elevatorsbuildings"; //fetching the records through API
      fetch(page_url)
        .then((res) => res.json())
        .then((res) => {
          this.elevators = res; //passing the response into the elevators object
        });
    },
  },
};
</script>
