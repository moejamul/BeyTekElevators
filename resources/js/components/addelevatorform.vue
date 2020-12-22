<template>
<form  method="POST" @submit.prevent="submit" style="padding:3em;">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" >Elevator Name</label>
      <input  class="form-control"  v-model="fields.name"  placeholder="Elevator Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Index</label>
      <input class="form-control"  v-model="fields.index" placeholder="Index">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Building</label>
      <input  class="form-control"  v-model="fields.building_id" placeholder="building_id">
    </div> 

  </div>  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</template>


<script>
    export default {
        data() {
            return {
               
                fields: {}
            }
        },
         methods: {
            submit() {
                axios.post('http://localhost/beytekelevators/public/api/addelevator', this.fields).then(response => {
                    this.fields = {};
                    this.success = true;
                    this.errors = {};
                }).catch(error => {
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                    }
                    console.log('Error');
                });
            }
         }
    }

        </script>