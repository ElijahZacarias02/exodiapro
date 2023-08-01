
<div class="wrapper mx-12 "> a
	<section class="content   ">
		<div class="container-fluid ">
			<div class="row mt-5 ">
				<form id="submit_events">
				<div class="col-md-12 ">
                    
                        <div id="august" class=" show card" aria-labelledby="headingOne" data-parent="#accordionExample" style=" background: rgba(0, 0, 0, 0.5);" >
                            <h1 class="text-white text-center my-2" style="  font-family: 'Nunito Sans', sans-serif;">MBC SCHEDULE</h1>
								<div class="row mx-2">
									<div class="col-md-8" >
										<div class="card bg-dark" style="background-color: ;">
											<div class="card-body text-center ">
												<div class="container " >
            											<div id="calendar" class="bg-dark"></div>
        										</div>
												
											</div>
										</div>
									</div>
									
									<?php foreach($event as $row){?>
									<div class="col-md-4" >
										<div class="card" style="background-color: #FE0000;">
											<div class="card-body text-center">
												<h5 class="text-white" style=" font-family: 'Nunito Sans', sans-serif;">
												 <?php echo date("F j, Y, g:i a",strtotime($row['start_event']))?>
												</h5>
												
												<div class="card" style="background-color: #242329;">
													<div class="card-body text-center">
														<h5 class="text-white" >
												  			<?php echo $row['name'];?>
														</h5>

                            <button type="button" class="text-bold btn btn-dark"  
                            onclick="goView(<?php echo $row['id']?>)"style="font-family: 'Nunito Sans', sans-serif;">View
                            </button>

													</div>
												</div>
												
												<div class="card" style="background-color: #242329;">
													<div class="card-body text-center">
														<h5 class="text-white" style=" font-family: 'Nunito Sans', sans-serif;">
												  			Participants
														</h5>
														<p class="text-white" style=" font-family: 'Nunito Sans', sans-serif;">
														<?php echo $row['description']?>
													</p>
													</div>
												</div>
												
											</div>
										</div>
									</div>

									<?php }?>
								</div>

                        </div>
                        
                        
				</div>
				</form>
			</div> 
		</div> 
	</section> 
</div>


<div class="modal fade" id="asdasd">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Event Details</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
</button>
</div>
 <div class="modal-body">
            
            
            
            
<table class="table mb-5">
  <tbody>

    <tr>
      <th>Status</th>
      <td><span class="status" ></span></td>

    </tr>
    <tr>
                         
      <th>Start Event</th>
      <td><input type="text"  class="start_event" readonly style="border: 0; outline: none!important;"></td>

    </tr>
    <tr>
      <th>End Event</th>
      <td> <input type="text" class="end_event text-center" readonly style="border: 0; outline: none!important;"></td>

    </tr>
    <tr>
      <th>Title</th>
      <td><span class="title" id=""></span></td>

    </tr>
    <tr>
      <th>Participants</th>
      <td><span class="participants" id=""></span></td>

    </tr>
    <tr>
      <th>Description</th>
      <td><span class="description" id=""></span></td>

    </tr>    
  </tbody>
</table>
        
            
            
            
            
      
            
            <div class="form-group mt-3">
           
            </div>
            		
            </div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>

</div>

</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />  
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>
    $(document).ready(function(){
    
    $('.datepicker-days').hide();
    
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>admin_calendar/load",
            selectable:true,
            selectHelper:true,
            select:function(start, end, allDay)
            {
                var title = prompt("Enter Event Title");
                
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url:"<?php echo base_url(); ?>admin_calendar/insert",
                        type:"POST",
                        data:{title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                    })
                }
            },
            editable:true,
            eventResize:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                var title = event.title;

                var id = event.id;

                $.ajax({
                    url:"<?php echo base_url(); ?>gapp_calendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Update");
                    }
                })
            },
            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //alert(start);
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //alert(end);
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"<?php echo base_url(); ?>calendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated");
                    }
                })
            },
            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"<?php echo base_url(); ?>admin_calendar/delete",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Removed');
                        }
                    })
                }
            }
        });
    });
    
    
function goView(id){
	
       $.ajax({
        url : "<?php echo site_url('admin_calendar/view_ticket')?>/" + id,
        type: "GET",
        data: $(this).serialize(),
        dataType: "JSON",
        success: function(data)
        {
        $('.title').html(data.title);

        $('.start_event').val(data.start_event);
        $('.end_event').val(data.end_event);
        $('.status').html(data.status);
        $('.participants').html(data.participants);
        $('.description').html(data.description);
	
    
		$('#asdasd').modal('show'); 
  

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajaxaaaaa');
        }
    });
            
   
        }
          
    </script>