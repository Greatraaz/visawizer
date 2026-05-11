/*****************************************************************************************
 ****
 ****							CODE BY : ASENDRA RAJ SHAKYA
 ****
 *****************************************************************************************/
 

/********************************************************************************************
*********************************************************************************************
*       CONSULTANTS FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

$(document).on('submit','form.add-users',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.username_error').text(response['username_error']);
      	            $('.email_error').text(response['email_error']);
      	            $('.mobile_error').text(response['mobile_error']);
      	            $('.password_error').text(response['password_error']);
      	            $('.user_role_error').text(response['user_role_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('submit','form.update-users',function(e){
      
      e.preventDefault();
      
      $('.section.loader-section').show();
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.username_error').text(response['username_error']);
      	            $('.email_error').text(response['email_error']);
      	            $('.mobile_error').text(response['mobile_error']);
      	            $('.password_error').text(response['password_error']);
      	            $('.user_role_error').text(response['user_role_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      
   })
   

   

/********************************************************************************************
*********************************************************************************************
*       USER ROLE FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

$(document).on('submit','form.add-user-role',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.user_role_error').text(response['user_role_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('submit','form.update-user-role',function(e){
      
      e.preventDefault();
      
      $('.section.loader-section').show();
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.user_role_error').text(response['user_role_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      
   })

/********************************************************************************************
*********************************************************************************************
*       USER ROLE FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

$(document).on('submit','form.add-update-user-type',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
                    type: 'POST',
                url: url,
                data: new FormData(this),
                dataType:'json',
                contentType: false,
              processData: false,
              cache:false,
              async:false,
                success: function(response)
                {
                  if(response['login_status']==1)
                  {
                  if(response['status']==1)
                  {
                    $('.section.loader-section').hide();
                    successAlert(response);
                    window.location.replace(return_url);
                  }
                  else
                  {
                    $('.user_type_error').text(response['user_type_error']);
                      $('.error_message').text(response['message']);
                  }
                  }
                  else
                  {
                    window.location.replace('/login');
                  }
                    
                 $('.section.loader-section').hide();
                    
                }
        });
      

   })
   
   
/********************************************************************************************
*********************************************************************************************
*       PERMISSION GROUP FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

$(document).on('submit','form.add-permission-group',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.permission_group_error').text(response['permission_group_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('submit','form.update-permission-group',function(e){
      
      e.preventDefault();
      
      $('.section.loader-section').show();
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.permission_group_error').text(response['permission_group_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      
   })
   
/********************************************************************************************
*********************************************************************************************
*       PERMISSION CATEGORY FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

$(document).on('submit','form.add-permission-category',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.permission_group_error').text(response['permission_group_error']);
      	            $('.permission_category_error').text(response['permission_category_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('submit','form.update-permission-category',function(e){
      
      e.preventDefault();
      
      $('.section.loader-section').show();
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.permission_group_error').text(response['permission_group_error']);
      	            $('.permission_category_error').text(response['permission_category_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      
   })

/*****************************************************************************************
******************************************************************************************
*       POP-UPS
******************************************************************************************
******************************************************************************************/     

function itemAlert(data){
    
    swal({
        title: data['message'],
        icon:"warning",
        buttons: true
    }).then(
            (willDelete) => {
            if (willDelete) {
                var id = data['id'];
                var status = data['status'];
                  $.ajax({
                            type: 'POST',
                            url: data['url'],
                            data: {id:id,status:status},
                            dataType:'json',
                            cache:false,
                            async:false,
                            success: function(response)
                            {
                              
                              if(response['status']==1)
                              {
                                successAlert(response);
                                window.location.reload();
                              }
                              else
                              {
                                $('.message_error').text(response['message']);
                              }
                                
                            }
                    });
              return 1;
            } else {
              /*swal("Your imaginary file is safe!");
              console.log("Safe");*/
              return 0;
            }
        });
    }
   
/********************************************************************************************
*********************************************************************************************
*       FINANCIAL YEAR FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

$(document).on('submit','form.add-financial-year',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.financial_year_error').text(response['financial_year_error']);
      	            $('.status_error').text(response['status_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('submit','form.update-financial-year',function(e){
      
      e.preventDefault();
      
      $('.section.loader-section').show();
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.financial_year_error').text(response['financial_year_error']);
      	            $('.status_error').text(response['status_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      
   })
   
   
/********************************************************************************************
*********************************************************************************************
*       INVOICE FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

$(document).on('submit','form.add-invoice',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url); 
      	          }
      	          else
      	          {
      	            $('.consultant_name_error').text(response['user_id']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('submit','form.update-invoice',function(e){
      
      e.preventDefault();
      
      $('.section.loader-section').show();
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url);
      	          }
      	          else
      	          {
      	            $('.username_error').text(response['username_error']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      
   })
   
$(document).on('submit','form.generate-bulk-invoice',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url); 
      	          }
      	          else
      	          {
      	            $('.consultant_name_error').text(response['user_id']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('submit','form.escalate-invoice',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var invoice_sr_id = $('.invoice_sr_id').val();
      var hsn_code = $('.hsn_code').val();
      
      var return_url = form.attr('return_url');
      
      var formData = new FormData(this);
      
      formData.append('invoice_sr_id', invoice_sr_id);
      formData.append('hsn_code', hsn_code);
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: formData,
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url); 
      	          }
      	          else
      	          {
      	            $('.consultant_name_error').text(response['user_id']);
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('submit','form.approve-invoice',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var invoice_sr_id = $('.invoice_sr_id').val();
      var hsn_code = $('.hsn_code').val();
      
      var return_url = form.attr('return_url');
      
      var formData = new FormData(this);
      
      formData.append('invoice_sr_id', invoice_sr_id);
      formData.append('hsn_code', hsn_code);
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: formData,
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['login_status']==1)
    	          {
      	          if(response['status']==1)
      	          {
      	          	$('.section.loader-section').hide();
      	            successAlert(response);
      	            window.location.replace(return_url); 
      	          }
      	          else
      	          {
    	              $('.message_error').text(response['message']);
      	          }
    	          }
    	          else
    	          {
    	            window.location.replace('/login');
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
$(document).on('change','.filter-approved-invoices',function(){
      
      var financial_year = $('.financial-year').val();
      var month = $('.month').val();
      var business_category = $('.business-category').val();
      var consultant_id = $('.consultant-id').val();
     
      
      $('#load-invoices').load('/admin/ajax/load-invoices',{financial_year:financial_year,month:month,business_category:business_category,consultant_id:consultant_id});
      

   })
   
/********************************************************************************************
*********************************************************************************************
*       ASSIGN PERMISSIONS FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

$(document).on('submit','form.assign-permission',function(e){
      
      e.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      
      var return_url = form.attr('return_url');
      
       $.ajax({
        			type: 'POST',
    	        url: url,
    	        data: new FormData(this),
    	        dataType:'json',
    	        contentType: false,
              processData: false,
              cache:false,
              async:false,
    	        success: function(response)
    	        {
    	          if(response['status']==1)
    	          {
    	          	$('.section.loader-section').hide();
    	            successAlert(response);
                    window.location.replace(return_url);
    	          }
    	          else
    	          {
  	              $('.error_message').text(response['message']);
    	          }
    	              
    	            
    	         $('.section.loader-section').hide();
    	            
    	        }
        });
      

   })
   
   

/********************************************************************************************
*********************************************************************************************
*       DELETE USERS  FUNCTIONS
*********************************************************************************************
*********************************************************************************************/

function successAlert(response)
{
  swal({
    title: "Done !",
    text: response['message'],
    icon: "success",
  });
}

function deleteItemAlert(data){
	
	swal({
	        title: "Are you sure?",
	        text: "Once deleted, you will not be able to recover",
	        icon:"warning",
	        buttons: true
	    }).then(
    	        (willDelete) => {
                if (willDelete) {
                      var delete_id = data['delete_id'];
                      $.ajax({
                        			type: 'POST',
                    	        url: data['url'],
                    	        data: {delete_id:delete_id},
                    	        dataType:'json',
                              cache:false,
                              async:false,
                    	        success: function(response)
                    	        {
                    	          console.log(response);
                    	          
                    	          if(response['status']==1)
                    	          {
                    	            successAlert(response);
                                    window.location.reload();
                    	          }
                    	          else
                    	          {
                  	              $('.message_error').text(response['message']);
                    	          }
                    	            
                    	        }
                        });
                  return 1;
                } else {
                  swal("Your data is safe!");
                  console.log("Safe");
                  return 0;
                }
             });
}

function changeStatusAlert(data){
    
    swal({
            title: "Are you sure?",
            text: "Do you Want to Change Status ?",
            icon:"warning",
            buttons: true
        }).then(
                (willDelete) => {
                if (willDelete) {
                      var id = data['id'];
                      var status = data['status'];
                      $.ajax({
                                type: 'POST',
                                url: data['url'],
                                data: {id:id,status:status},
                                dataType:'json',
                                cache:false,
                                async:false,
                                success: function(response)
                                {
                                  console.log(response);
                                  
                                  if(response['status']==1)
                                  {
                                    successAlert(response);
                                    window.location.reload();
                                  }
                                  else
                                  {
                                    $('.message_error').text(response['message']);
                                  }
                                    
                                }
                        });
                  return 1;
                }
             });
}
