<template>
  <div>
    <table class="table table-reflow">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Address</th>
          <th>Floors</th>
          <th>Contact Number</th>
          <th>Elevator Name</th>
          <th>Elevator Index</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="building in buildings" :key="building.id">
          <!-- v-for is used to go through the buildings objects array, :key is the 
        unique values that is going to be attributes to every element -->
          <th scope="row">{{ building.id }}</th>
          <td>{{ building.name }}</td>
          <td>{{ building.contact_number }}</td>
          <td>{{ building.address }}</td>
          <td>{{ building.floors }}</td>
          <td>
            <thead v-for="elevator in building.elevator" :key="elevator.id">
              <!-- v-for is used to go through the elevators objects array, :key is the 
        unique values that is going to be attributes to every element -->
              <th scope="col">{{ elevator.name }}</th>
            </thead>
          </td>

          <td>
            <thead v-for="elevator in building.elevator" :key="elevator.id">
              <th scope="col">{{ elevator.index }}</th>
            </thead>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>


  <script>
export default {
  data() {
    return {
      buildings: [], //defining the buildings objects array
      building: {
        //defining the building object and its attributes
        id: "",
        name: "",
        floors: "",
        address: "",
        contact_number: "",

        elevators: [], //defining the elevators objects array that is in the building objects array
        elevator: {
          //defining the elevators object and its attribute
          id: "",
          index: "",
          name: "",
          building_id: "",
        },
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
        page_url ||
        "http://localhost/beytekelevators/public/api/buildingselevators"; //fetching the records through API
      fetch(page_url)
        .then((res) => res.json())
        .then((res) => {
          this.buildings = res; //passing the response into the elevators object
        });
    },
  },
};
</script>
