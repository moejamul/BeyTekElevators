<template>
    

<div>


<table class="table" >
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
    <tr>
      <th scope="row">{{elevator.id}}</th>
      <td>{{elevator.index}}</td>
      <td>{{elevator.name}}</td>
      <td>{{elevator.building.name}}</td>
       <td>{{elevator.building.address}}</td>
      
    </tr>
   
  </tbody>
</table>



 






</div>

</template>


  <script>
export default {



  data() {
    return {
      elevators: [],
      elevator: {
        id: '',
        index: '',
        name: '',
        building_id: '',
        buildings: [],
      building: {
        id: '',
        name: '',
        floors: '',
        address: '',
        contact_number: ''
      }
      },
        elevator_id: '',
 
    

    };
  },
  created() {
    this.fetchElevators();
  },
  methods: {
    fetchElevators(page_url) {
     let vm=this;  
     page_url= page_url || 'http://localhost/beytekelevators/public/api/elevatorsbuildings'
      fetch(page_url)
        .then(res => res.json())
        .then(res=>{
            this.elevators=res;
           
            //  alert('http://localhost/beytekelevators/public/api/listbuildings/'.concat(res[0].building_id));

            })

            

            
        
    }
//     fetchBuilding(page_url) {
//      let vm=this;  
     

//  page_url= page_url || 'http://localhost/beytekelevators/public/api/listbuildings'.this.elevators[0].building_id
//       fetch(page_url)
//         .then(res => res.json())
//         .then(res=>{
//             alert(res[0].name);
//         })

     
        
//     }
  }
};
   
</script>
