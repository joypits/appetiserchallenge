<template>
    
     <div class="row">
                <div class="col-12">
                        <div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Calendar</h6>
							</div>

							<div class="card-body">
                            <form name="myform" @submit.prevent="AddNewCalendar" id="myForm">
                                    <div class="row">
                                        <div class="col-4">
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
                                                        <input type="date" name="date_from"  ref="date_from" class="form-control" placeholder="col-md-6">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>To</label>
                                                        <input type="date" name="date_to" ref="date_to" class="form-control" placeholder="col-md-6">
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
                                        <div class="col-8">
                                        
                                             <table class="table">
                                                <thead>
                                                    <tr v-for="(category, value) in tHeader">
                                                        <th colspan="2"><h3>{{ category.date | formatDate }}</h3></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-bind:class="{success:category.event != null,default:category.event == null}"  v-for="(category,index) in categories_list">
                                                        <td width="150px">{{ category.day_number }} {{ category.day_string }}</td>
                                                        <td align="left">{{ category.event }}</td>
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
<style>
    .default{
        background-color: #fff;
    }
    .success{
        background-color: #EAF5EA;
    }
   .alert-success {
        color: #fff;
        background-color: #229954;
        border-color: #5ab55e;
        opacity: 0.6;
        font-size:10px;
        font-family: 'Arial Narrow';
    }
    
</style>
<script>
                
     export default {
        name:"ViewCalendar",
        name: "AddCalendar",
 
        data () {
            return {
                categories_list : [],
                tHeader : '',
                dateFrom: '2018-07-01',
                dateTo: '2018-07-31',
            }
        },
 
        methods : {
             ViewCalendar() {
                let instance = this;
                axios.get('api/calendar/' + this.dateFrom + '/' +  this.dateTo)
                    .then(function (response) {
                        instance.categories_list = response.data.event;
                        instance.tHeader = response.data.dateHeader;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });       
            },
            AddNewCalendar() {
                var formData = new FormData(document.getElementById("myForm"));
                let instance = this;
                axios.post('api/calendar/add', formData)
                    .then(function (response) {
                         Swal.fire({
                                    type: 'success',
                                    title: 'Event successfully saved',
                                    position: 'top-end',
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    customClass: "alert-success",
                                    timer: 1000
                                });
                    });
                     axios.get('api/calendar/' + document.querySelector("input[name=date_from]").value + '/' +  document.querySelector("input[name=date_to]").value)
                            .then(function (response) {
                                instance.categories_list = response.data.event;
                                instance.tHeader = response.data.dateHeader;
                        
                            });
            }
        },
        mounted() {
            this.ViewCalendar();
        }
                        
    }

</script>