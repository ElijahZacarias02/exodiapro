<form id="contact_us_form" class="my-form" autocomplete="off">
   <div class="container-contact">
      <h2 class="h2 section-title">
         <span class="span">Contact Us</span>
      </h2>
      <h1>Get in touch!</h1>
      <ul>
         <li>
            <select name="subject">
               <option selected disabled>-- Please choose a subject --</option>
               <option value="general_inquiry">General Inquiry</option>
               <option value="work">Work</option>
               <option value="sponshorships">Sponsorships</option>
               <option value="feedback">Feedback</option>
               <option value="report">Report</option>
               <option value="others">Others</option>
            </select>
         </li>
         <li>
            <div class="grid grid-2">
               <input type="text" name="name" placeholder="Name" required />
               <input type="text" name="surname" placeholder="Surname" required />
            </div>
         </li>
         <li>
            <div class="grid grid-2">
               <input type="email"  name="email"   placeholder="Email" required />
               <input type="number" name="contact" placeholder="Phone" required />
            </div>
         </li>
         <li>
            <textarea name="message" placeholder="Message"></textarea>
         </li>
         <li>
            <div class="grid grid-3">
               <div class="required-msg" style="opacity: 0">REQUIRED FIELDS</div>
               <button id="submit-contact" class="btn-grid" type="button">
               <span class="front">SUBMIT</span>
               </button>
               <button class="btn-grid" type="reset">
               <span class="front">RESET</span>
               </button>
            </div>
         </li>
      </ul>
   </div>
</form>
<script>
   $(document).on('click','#submit-contact',function(){
   
       var form = $('#contact_us_form')[0];
       var formData = new FormData(form);
   
                 $.ajax({
                   type: 'post',
                   url: '<?=site_url('contact/save_contact')?>',
                   data:formData,
                   cache: false,
                   contentType: false,
                   processData: false,	
                   dataType: 'json',
                   success: function (data) {  
                   
                   
                   console.log(data);       
                   
                    
   
                      if(data != 'success'){
                     	
   
                       Swal.fire(
                     'Failed',
                    	data,
                     'warning',
                     
                   )
                     	
             
                     	
                     	}                  	      else{
                     	     
                     	
                           Swal.fire({
                                     icon: 'success',
                                     title: 'SUCCESSFULLY SUBMITTED',
                                     showConfirmButton: false,
                                     timer: 2000
                                   }).then((result) => {  
                                         	 
    // window.location.reload();
                                        }) 
                     	
                     	
                     	}
                   }
                 });
   
   
   
   })
   
       
</script>