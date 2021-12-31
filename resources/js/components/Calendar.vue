<template>
     <div class="row">
                <div class="col-12">
                        <div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Calendar</h6>
							</div>

							<div class="card-body">
                            <form name="myform" @submit.prevent="AddNewEvent" id="myForm">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label>Event</label>
                                                <div class="form-group form-group-feedback form-group-feedback-right">
                                                    <input type="text" name="event" class="form-control form-control-sm">
                                                    <div class="form-control-feedback form-control-feedback-sm">
                                                        <i class="icon-stack-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>From</label>
                                                        <input type="date" name="date_from" class="form-control" placeholder="col-md-6">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>To</label>
                                                        <input type="date" name="date_to" class="form-control" placeholder="col-md-6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="checkboxval[]" value="Mon" class="custom" />
                                                <label for="monday" class="chkbox">Mon</label>
                                                <input type="checkbox" name="checkboxval[]" value="Tue" id="tuesday" class="custom" />
                                                <label for="tuesday" class="chkbox">Tue</label>
                                                <input type="checkbox" name="checkboxval[]" value="Wed" id="wednesday" class="custom" />
                                                <label for="wednesday" class="chkbox">Wed</label>
                                                <input type="checkbox" name="checkboxval[]" value="Thu" id="thursday" class="custom" />
                                                <label for="thursday" class="chkbox">Thu</label>
                                                <input type="checkbox" name="checkboxval[]" value="Fri" id="friday" class="custom" />
                                                <label for="friday" class="chkbox">Fri</label>
                                                <input type="checkbox" name="checkboxval[]" value="Sat" id="saturday" class="custom" />
                                                <label for="saturday" class="chkbox">Sat</label>
                                                <input type="checkbox" name="checkboxval[]" value="Sun" id="sunday" class="custom" />
                                                <label for="sunday" class="chkbox">Sun</label>
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                        <div class="col-9">
                                             <table class="table primary table-bordered">
                                                <thead>
                                                    <th colspan="2"></th>
                                                </thead>
                                                <tbody>
                                                <tr v-for="(category,index) in categories_list">
                                                    <td>{{ category.days_num }} {{ category.days_str }}</td>
                                                    <td>{{category.event}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
							</div>
						</div>
                </div>
            </div>  

            
</template>
<script>
     export default {
        name:"ViewEvent",
        name: "AddEvent",
 
        data () {
            return {
                categories_list : [],
            }
        },
 
        methods : {
            
             viewEvents() {
                let instance = this;
                axios.get('api/events')
                    .then(function (response) {
                        console.log(response);
                        instance.categories_list = response.data;
 
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            AddNewEvent() {
                var formData = new FormData(document.getElementById("myForm"));
                let instance = this;
                axios.post('api/events/add', formData)
                    .then(function (response) {
                        console.log(formData);
                       
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        },
        mounted() {
            this.viewEvents();
        }
    }
</script>