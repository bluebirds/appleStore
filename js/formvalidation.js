$(function(){
				var emailvalid=false;	
					$("#email").change(function(){
			

			var email = $('#email').val();

			var dataString = 'email='+ email;

				$.ajax({

						type: "POST",

						url: "checksignup.php",

						data: dataString,

						cache: false,

						success: function(html){

								$("#email_avail").html(html);
								if($("#email_avail").text()==1){
											$("#email_avail").text("Id Already Exist Please Change The Id");
											emailvalid=false;
								}
								else{
									$("#email_avail").text("Id Available");
									emailvalid=true;
								}
								$('#email_avail').css({'display':'block'});

						}



				});



			});

					$('#submit_form').click(function(){
						//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\*/
						var a = $("#email").val();
				        var filter = /^([a-zA-Z0-9_\.])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var strValidChars = "-0123456789.";
        var firstem=(a.substring(0,1));
        var strEndChars = "-._";
        var err=0;
        var uerr=0;
        var derr=0;
        var valid =false;
		var mail=false;
		var pass=false;
		var telephone=false;
		var address=false;
		var cit=false;
		var count=false;
		var sal=false;
		var national=false;
		var term;
        if(a.length > 8)
        {

            try
            {
                var sp = a.split("@");
                var secem=(sp[0].substring(sp[0].length-1));
                var threm=(sp[1].substring(0,1));
                var com = sp[1].split(".");
                var foem=(com[0].substring(com[0].length-1));
                var fiem=(com[1].substring(0,1));
                if(filter.test(a) && strValidChars.indexOf(firstem) == -1  && strEndChars.indexOf(secem) == -1 && strEndChars.indexOf(threm) == -1 && strEndChars.indexOf(foem) == -1 && strEndChars.indexOf(fiem) == -1)
                {
                    for(i=0;i<a.length;i++)
                    {
                        fiem=(a.substring(i,i+1));
                        if("_".indexOf(fiem) != -1)
                        {
                            uerr=uerr+1;
                        }
                        if(".".indexOf(fiem) != -1)
                        {
                            derr=derr+1;
                        }
                    }
                    for(i=0;i<sp[1].length;i++)
                    {
                        foem=(sp[1].substring(i,i+1));
                        if(strEndChars.indexOf(foem) != -1)
                        {
                            err=err+1;
                        }
                    }
                    if(uerr>2 || err>4 || derr>3)
                    {
                        valid =false;
                    }
                    else
                        valid =true;
                }
                else
                {
                    valid =false;
                }
			}
            catch(err)
            {
                return false;
            }
		}
		else{
			valid =false;
		}
						
						
						
						/////////////////////////////////////////////////////////////////////////////////////////
						if(valid==true){
							if($('#Repeat_email').val()!=$('#email').val()){
										$('#Repeat_email').css({
                							'background-color':'#FEB1B1'
            							});
										$('#email_val').css({'display':'block'});
										$('#email_val').text("Both email address not match");

									return false;
							}else{
								$('#email_val').css({'display':'none'});
								mail=true;
							}
							
						}else{
									$('#email').css({
                							'background-color':'#FEB1B1'
            							});
									$('#email_val').css({'display':'block'});
										$('#email_val').text("Email Not Valid");
										return false;
						}
						
						/////////////////////////////////////////////////////////////////////////////////////////
						
							if(mail==true){
								var a=$('#pass1').val();
							if(a==""|| a.length<10){
										$('#pass1').css({
                							'background-color':'#FEB1B1'
            							});
										$('#pass_val').css({'display':'block'});
										$('#pass_val').text("Password Must Be Greater Then 10 character");

									return false;
							}else if($('#pass1').val()!=$('#re-pass').val()){
										$('#re-pass').css({
                							'background-color':'#FEB1B1'
            							});
										$('#pass_val').css({'display':'block'});
										$('#pass_val').text("Both Password Not Match");
										return false;
							}else{
								$('#pass_val').css({'display':'none'});
								pass=true;
							}
							
							
							/////////////////////////////////////////////////////////////////////////////////////////
							if(pass==true){
							if($('#name').val()=="")
							{
								$('#name').css({
                							'background-color':'#FEB1B1'
            							});
										$('#name_val').css({'display':'block'});
										$('#name_val').text("Plz Enter The Name");
										return false;
								
							}
							else{
								$('#name_val').css({'display':'none'});
								nam=true;
							}
							}
							//////////////////////////////////////////////////////////////////////////////////////////
							if(nam==true){
							if($('#tele').val()=="")
							{
								$('#tele').css({
                							'background-color':'#FEB1B1'
            							});
										$('#tele_val').css({'display':'block'});
										$('#tele_val').text("Plz Enter Phone No");
										return false;
								
							}else{
								$('#tele_val').css({'display':'none'});

								telephone=true;
							}
							}
							//////////////////////////////////////////////////////////////////////////////////////////
							if(telephone==true){
							if($('#adress').val()=="")
							{
								$('#adress').css({
                							'background-color':'#FEB1B1'
            							});
										$('#adress_val').css({'display':'block'});
										$('#adress_val').text("Plz Enter The Street");
										return false;
								
							}else{
								$('#adress_val').css({'display':'none'});
								address=true;
							}
							}
							/////////////////////////////////////////////////////////////////////////////////////////
							if(address==true){
								if($('#city').val()=="")
							{
								$('#city').css({
                							'background-color':'#FEB1B1'
            							});
										$('#city_val').css({'display':'block'});
										$('#city_val').text("Plz Enter The City Name");
										return false;
								
							}else{
								$('#city_val').css({'display':'none'});
								cit=true;
							}
							}
							////////////////////////////////////////////////////////////////////////////////////////
								if(cit==true){					
							if($('#country').val()=="" || $('#country').val()=="default")
							{
								$('#country').css({
                							'background-color':'#FEB1B1'
            							});
										$('#country_val').css({'display':'block'});
										$('#country_val').text("Plz Choose The Country");
										return false;
								
							}else{
								$('#country_val').css({'display':'none'});
								count=true;
							}
								}
								//////////////////////////////////////////////////////////////////////////////////////
								if(count==true){
								
							if($('#year').val()=="")
							{
								$('#year').css({
                							'background-color':'#FEB1B1'
            							});
										$('#year_val').css({'display':'block'});
										$('#year_val').text("Plz Enter Date Of Birth");
										return false;
								
							}else{
								$('#year_val').css({'display':'none'});
								sal=true;
							}
								}
								////////////////////////////////////////////////////////////////////////////////////////
								if(sal==true){
									 if($('#Nationality').val()=="" || $('#Nationality').val()=="default")
							{
								$('#Nationality').css({
                							'background-color':'#FEB1B1'
            							});
										$('#Nationality_val').css({'display':'block'});
										$('#Nationality_val').text("Choose Your Nationality");
										return false;
								
							}
							else{
								$('#Nationality_val').css({'display':'none'});
								national=true;
							}
								}
								//////////////////////////////////////////////////////////////
							if(national==true){	
							term= $('#terms').attr('checked')?true:false;
							if(term==false)
							{
								$('#terms').css({
                							'background-color':'#FEB1B1'
            							});
										$('#terms_val').css({'display':'block'});
										$('#terms_val').text("Agree The Terms And Conditions");
										return false;
								
							}else{
								term=true;
								return true;
							}
							}
							
							////////////////////////////////////////////////////////////////////
							if(term==true){	
							if(emailvalid==true)
							{
								
										return false;
								
							}else{
								return true;
							}
							}
							
						}
						
						
						
						
						
						
						
						
						
						
						/////////////////////////////////////////////////////////////////////////////////////////
						
						
						
							
					
					});
					
			
			
			});