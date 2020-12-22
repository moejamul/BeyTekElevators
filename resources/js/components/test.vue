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
    <tr v-for="building in buildings" :key="building.id" >
      <th scope="row">{{building.id}}</th>
      <td>{{building.name}}</td>
      <td>{{building.contact_number}}</td>
      <td>{{building.address}}</td>
      <td>{{building.floors}}</td>
      <td >

           <thead v-for="elevator in building.elevator" :key="elevator.id">
  
      <th scope="col">{{elevator.name}}</th>
    
    
  </thead>


      </td>

       <td>

           <thead v-for="elevator in building.elevator" :key="elevator.id">
  
      <th scope="col">{{elevator.index}}</th>
      
    
  </thead>


      </td> 
    
    </tr>

  </tbody>
</table>

<!-- <div v-for="building in buildings" :key="building.id">

    <div v-if="building.elevator[0]!=null">
        <h1> hey </h1>
    </div>

    </div> -->

    






 






</div>

</template>


  <script>
export default {



  data() {
    return {
      buildings: [],
      building: {
        id: '',
        name: '',
        floors: '',
        address: '',
        contact_number: '',

        elevators: [],
      elevator: {
        id: '',
        index: '',
        name: '',
        building_id: ''
      }
      },
    

    };
  },
  created() {
    this.fetchBuildings();
  },
  methods: {
    fetchBuildings(page_url) {
     let vm=this;  
     page_url= page_url || 'http://localhost/beytekelevators/public/api/buildingselevators'
      fetch(page_url)
        .then(res => res.json())
        .then(res=>{
            this.buildings=res;
        
        })
        
    }
  }
};
   
</script>
