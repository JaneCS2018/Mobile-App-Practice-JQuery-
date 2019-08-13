<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Denk+One|Lobster+Two" rel="stylesheet">
	<title>Home</title>
   <!-- Library -->
	<link rel="stylesheet" href="lib/js/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="lib/js/jquery.mobile.theme-1.4.5.min.css">
	<!-- <link rel="stylesheet" href="lib/js/jquery.mobile.structure-1.4.5.min.css"> -->
	<!-- Local -->
	<link rel="stylesheet" href="css/jq_mobile_app.css">
	<link rel="stylesheet" href="css/app.css">
	<!-- <link rel="stylesheet" href="css/Animal_content.css"> -->
   
   <!-- Library -->
	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="lib/js/jquery.mobile-1.4.5.min.js"></script>
	<script src="http://underscorejs.org/underscore-min.js"></script>
	<!-- Local -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp1A6W_aBWkNjPQvhe6NYTK183bw6NVeU">
    </script>

<!--     <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry"></script> -->
	
	<!-- Map -->
    <script src="js/map.js"></script>
    <script src="js/app.js"></script>
    <script src="js/form.js"></script>
    <script src="js/distance.js"></script>
	<!-- <script src="js/Animal_content.js"></script> -->
    <link rel="stylesheet" href="css/main.css">
    </head>
<body>
    <section data-role="page" id="login">
		<header data-role="header">
		<div id="fadeout">
    			<div class="momo"></div>
    	 </div> 
		</header>
    			<div class="container" id="fadein" style="display:none;">
	                 <div class="titlemy">My Uni</div> 
					<div class="login-form" action="formdata.php">
					   
						<form>
							<input type="text" id="username" placeholder="User name"><br>
							<input type="password" id="password" placeholder="Password"><br>
							<button type="submit" class="js-login">Login</button>
						</form>
						<div class="link">
						<a href="Forget.php">FORGOT PASSWORD</a><br>	
						<div class="link01"><a href="Create.php">CREATE NEW ACCOUNT</a></div>
						</div>
					</div>
				 <!-- <div class="loggedin-section col-lg-12 col-md-12 col-sm-12">
					<button class="js-logout">Logout</button>
					</div>
		             
				</div>  -->
	       </div>
	
		
	</section>
	<section data-role="page" id="page1">
		<header data-role="header">
			<h1>Home</h1>
		</header>
		<div data-role="main">
			<div class="comment">
			<div class="comment_photo"><img src="images/Home_person.png"></div>	
   			<form>    
     		<input type="text" id="top_comment" class="search" size="130
     		" value="" placeholder="Share a uni, photo or idea"> 

			</form>	
			<div class="camera">
			   <img src="images/folder_icon01.png">
			</div>
			<div>
				<div class="file0">
					<input type="file" id="file1">
				</div>
			</div>
			</div>
			<div class="video_post"></div>
			<div id="top_comment01"></div>
			<div class="post">
				<!-- <img src="images/Home_b.png">
				<img src="images/Home_c.png">
				<img src="images/Home_e.png">
				<img src="images/Home_c.png"> -->
			</div>
		</div>
		<footer data-role="footer">
			<?php 
				include "footer.html";
			 ?>
		</footer>
	</section>
   <section data-role="page" id="animallist">
		<header data-role="header">
			<h1>Uni List</h1>
		    <div class="add_unilist"><a><img src="images/add.png"></a></div>
		</header>
		<div data-role="main">	

         <!-- Add new uni menu -->
       
         <div class="Uni_Whole">	

          	<div class="Uni_edit">

			   

			    	<div class="unilist createform">Add New Uni</div>

			    	<!-- <div class="unilist" id="delete">Remove Uni</div> -->

		    </div>

          <!-- Create Uni Form -->

          <!-- Add Animal form -->

         <div class="animallist_add">	
                          <div class="cross00">
         						<img src="images/cross_15.png">
         			    </div>
         			<div class="add">
         		     <form id="add-Uni" enctype="multipart/form-data">

		         <div class="form-warning" ></div>
		         					<input type="hidden" id="add-animal-lat">
		         					<input type="hidden" id="add-animal-lng">
		         					<div class="form_description">
		         						<div class="form_step">1</div>
		         						<div class="form_des">Click the location on the map</div>
		         					</div>
		         					<div class="form_description">
		         						<div class="form_step">2</div>
		         						<div class="form_des">Fill out the information</div>
		         					</div>
		         					<div class="form_title">
		         						<label for="add-animal-title">Select a uni icon</label>
		         						<div class="Uni_icons">
		         							<div class="tab active"><img src="images/momo_150.gif"></div>
		         							<div class="tab"><img src="images/rabbit_150.gif"></div>
		         							<div class="tab"><img src="images/Monkey_150.gif"></div>
		         							<div class="tab"><img src="images/Snake_150.gif"></div>
		         							<div class="tab"><img src="images/Shark_150.gif"></div>
		         							<div class="tab"><img src="images/Bat_150.gif"></div>
		         							<div class="tab"></div>
		         							<div class="uni_select">
		         							
        										<img src="images/Uni_icon.png" id="upfile1" style="cursor:pointer" />
											<div class="file0">
												<input type="file" id="file1">
											</div>
		         							</div>
		         						</div>
		         						
									</div>
		         					<div class="form_title">
		         						<label for="add-animal-title">Uni Name</label>
		         						<input type="text" placeholder="Uni Name" id="add-animal-name" required>
	
									</div>
									<div class="form_title01">
									    <div class="Form_second">	
			         						<label for="add-animal-title">Uni Age</label>
			         						<input type="number" placeholder="Uni Age" id="add-animal-age" required>
		         						</div>
		         						<div class="Form_third">	
			         						<label for="add-animal-title">Uni Food</label>
			         						<input type="text" placeholder="Uni Type" id="add-animal-food" required>
		         						</div>
		         						 
									</div>    
									<div class="form_title">
										<label for="add-animal-description">Uni Description</label>
										<input type="text" placeholder="Description" id="add-animal-description" required></input>
									</div>
				
									<div>
										<fieldset class="ui-grid-a">
										 <div class="ui-block-a"><input type="reset" value="Reset" data-theme="a"></div>
				    					<div class="ui-block-b"><input type="submit" value="Submit" data-theme="a"></div>
									    </fieldset>
									</div>

			</form>

		</div>

	</div>

</div>

           <!--  <form id="add-Uni" enctype="multipart/form-data">
           				<div class="form-warning"></div>
           					<input type="hidden" id="add-animal-lat">
           					<input type="hidden" id="add-animal-lng">
           					<div>
           						<label for="add-animal-title">Uni Name</label>
           						<input type="text" placeholder="Uni Name" name="text-basic" id="text-basic" required>
           					</div>
           					<div>
           						<label for="add-animal-description">Description</label>
           						<textarea placeholder="Description" id="add-animal-description" required></textarea>
           					</div>
           					<div>
           						<label for="add-animal-picture">Picture</label>
           						<input type="file" id="add-animal-picture">
           					</div>
           					<div>
           						<fieldset class="ui-grid-a">
           						 <div class="ui-block-a"><input type="reset" value="Reset" data-theme="a"></div>
               					<div class="ui-block-b"><input type="submit" value="Add" data-theme="a"></div>
           					    </fieldset>
           					</div>
           			</form>  -->

		

          <!-- End of create uni form -->

         <!-- End of the menu -->

		<form class="searchbar">
				    <input id="filter-for-listview" data-type="search" placeholder="Type to search...">
				</form>

          

		<!-- Map class -->
		            <div class="map">MAP</div>
					<div class="animallist"></div>
				</div>
				<footer data-role="footer">
					<?php 
					    include "footer.html";
					 ?>
				</footer>
			</section>
			

	<section data-role="page" id="animal">
			<header data-role="header">
				<h1>Uni Info</h1>
				  <div class="add_uni">
			     	<a><img src="images/add.png"></a>
			      </div>	
			</header>
			<div data-role="main">
			   <div class="Uni_whole01">
					<div class="Uni_edit01"><div class="unilist createform">Add New Location</div></div>           
			          <div class="animal_add">
	                 	<!--Menu Form -->
	                 	
	                 	<!-- End of Menu Form -->
	                 <div class="cross">
							<a href="#animal"><img src="images/cross_15.png"></a>
				    </div>
				  <div class="add">
				
				<!-- Add Animal form -->
			            <form id="add-animal-location" enctype="multipart/form-data">
							<div class="form-warning"></div>
								<input type="hidden" id="add-animal-lat">
								<input type="hidden" id="add-animal-lng">
								<!-- Uni location icon list -->
								<div class="animallocation_icons"></div>
								<div class="form_description">
		         						<div class="form_step">1</div>
		         						<div class="form_des">Click the location on the map</div>
		         					</div>
		         					<div class="form_description">
		         						<div class="form_step">2</div>
		         						<div class="form_des">Fill out the information</div>
		         					</div>

								<div>
									<label for="add-animal-title">Uni Name</label>
									<input type="text" placeholder="Uni Name" name="text-basic" id="text-basic" required>
								</div>
								<div>
									<label for="add-animal-description">Description</label>
									<textarea placeholder="Description" id="add-animal-description" required></textarea>
								</div>
								<div>
									<label for="add-animal-picture">Picture</label>
									<input type="file" id="add-animal-picture">
								</div>
								<div>
									<fieldset class="ui-grid-a">
									 <div class="ui-block-a"><input type="reset" value="Reset" data-theme="a"></div>
			    					<div class="ui-block-b"><input type="submit" value="Submit" data-theme="a"></div>
								    </fieldset>
								</div>
						</form>
			            <!-- End of the code -->					
					</div>
	             </div>
	          </div>
	            <div class="map">MAP</div>
				<div class="animal-info"></div>
				<!-- Add Animal Form -->
	            
				<div class="back">
					<a href="#animallist"><img src="images/back.png"></a>
				</div>
			</div>
			<footer data-role="footer">
				<?php 
				    include "footer.html";
				 ?>
			</footer>
		</section>
		

<!-- 

	<section data-role="page" id="page3">
			<header data-role="header">
				<h1>Map</h1>
			</header>
			<div data-role="main">
				<div><img src="images/map_API.png"></div>
			</div>
			<footer data-role="footer">
				<?php 
					// include "footer.html";
				 ?>
			</footer>
		</section> -->
		<section data-role="page" id="page4">
			<header data-role="header">
				<h1>Uni</h1>
				
			</header>
			<div data-role="main">
			   <div class="video_share"><img src="images/share_icon_20.png"></div>
				<div class="momo_play">
				  <div class="momo_heading">
					<div class="level"><img src="images/momo_head_icon.png">Lv1</div>
					<div class="blood">
						<div class="red"></div>
						<span>50</span>
					</div>
					<div class="coin_total">
					<!-- 	<div class="upgrade">Upgrade</div> -->
					</div>
				 </div>
				</div>
			</div>
			<footer data-role="footer">
				<?php 
					include "footer.html";
				 ?>
			</footer>
		</section>
		<section data-role="page" id="page5">
			<header data-role="header">
				<h1>Me</h1>
			</header>
			<div data-role="main">
				<div class="photo01">
					<div class="title00 title01 ">Profile Photo</div>
					<div class="userphoto"></div>
				</div>
				<div class="photo">
					<div class="title01">Name</div>
					<div class="username"></div>
				</div>
				<div class="photo">
					<div class="title01">Gender</div>
					<div class="gender"></div>
				</div>
				<div class="photo">
					<div class="title01">Email</div>
					<div class="email"></div>
				</div>
				<div class="photo">
					<div class="title01">Phone</div>
					<div class="phone"></div>
				</div>
				<div class="photo">
					<div class="title01">Address</div>
					<div class="location"></div>
				</div>
				<div>
					<div class="js-logout">
					<span>Log out</span>
					</div>
				</div>
			</div>
			<footer data-role="footer">
				<?php 
					include "footer.html";
				 ?>
			</footer>
		</section>
		</body>
	<!-- Set time out script -->
		<script>
			setTimeout(function() {
		  $("#fadeout").fadeOut().empty();
		}, 6000);
			setTimeout(function() {
		  $(".container").css("display","initial");
		}, 6000);
			setTimeout(function() {
		    $("#transition_out").fadeOut().empty();
		  }, 10000);
		  	setTimeout(function() {
		    $("#transition_in").css("display","initial");
		  }, 11000); 
		</script> -->
		<script type="text/template" id="animallist-item-template">
	
			<div class="animallist-item" data-id="{{id}}">
			     	<div class="remove" id="remove"><img src="images/cross_black02.png"></div>
				<div class="animallist-item-image"><img src="{{picture}}" alt=""></div>
				<div class="animallist-details">
					<h2 class="animallist-name" data-id="{{id}}">{{name}}</h2>
					<div class="animallist-location" data-id="{{id}}">{{lastloclat}}, {{lastloclng}}</div>
				</div>
			
			</div>
		
	</script>
	<!-- animal location icon template -->
	<!-- <script script type="text/template" id="animal-icon-template">	
     <div class="animallocation_io"  data-id="{{id}}">
			<div class="icon_image"><img src="{{picture}}"></div>
			   
	</div> -->
    
	</script>

	<script type="text/template" id="animal-info-template">
	<div class="animallist-item01">
	    <div class="animallist-description" >
		  <div class="info_photo" ><img src="{{picture}}"></div>
		</div>
		<div class="animallist-description" data-id="{{id}}">
          <div class="info_name">Name:</div>
		  <div class="info_detail">{{name}}</div>
		</div>
		<div class="animallist-description" data-id="{{id}}">
		  <div class="info_name">Food:</div>
		  <div class="info_detail">{{Food}}</div>
		</div>
		<!-- <div class="animallist-description" data-id="{{id}}">
	      <div class="info_name">Type:</div>
		  <div class="info_detail">{{type}}</div>
		</div> -->
		<div class="animallist-description" data-id="{{id}}">
		  <div class="info_name">Age:</div>
		  <div class="info_detail">{{Age}}</div>
		</div>
		<!-- <div class="animallist-description" data-id="{{id}}">
	      <div class="info_name">Skill:</div>
		  <div class="info_detail">{{Skill}}</div>
		</div>
		<div class="animallist-description" data-id="{{id}}">
	       <div class="info_name">Interest:</div>
		  <div class="info_detail">{{Interest}}</div>
		</div> -->
		<div class="animallist-description description" data-id="{{id}}">
		  {{Description}}
		</div>
		
		</div>
	</script>

<!-- User Post Page -->
<script type="text/template" id="user-post-template">
	  <div class="post00" data-id="{{id}}">
		    <div class="post_firstline">
		         <div>
			     	<img src="{{commentphoto}}">
		         </div>
		         <div class="post_name">
			     	<div class="post_name01">{{name}}</div>
			     	<div class="post_city">{{city}}</div>
			     </div>
	         </div>
		     <div class="post_comment">{{comment}}</div>
		     <div class="post_video"><img src="{{video}}"></div>
		        <div class="post_secondline">
			     	<div class="like">
			     	    <img src="images/like_icon01.png">
			     		<div class="like01" data-id="{{id}}">Like</div>
			     		<div class="active_like" data-id="{{id}}">Like</div>
			     	</div>	
			     	<div class="comment00" data-id="{{id}}">
			     		<img src="images/comment_icon.png">
			     		<div class="comment_title">Comment</div>
			     	</div>
			     	<div class="share">
			     		<img src="images/share_icon01.png">
			     		<a href="http://www.facebook.com" class="Share_title" data-id="{{id}}">Share</a>
			     	</div>
			    </div>	
			     <div id="comment_write"></div>
			   <div class="post_thirdline" data-id="{{id}}">
               
			   	 <textarea placeholder="Write a comment" rows="3" name="textarea" id="comment"  data-id="{{id}}" required></textarea>
			   	 <button data-role="none" id="comment_submit"  data-id="{{id}}" type="submit" required>Submit</button>
			   	
			   
			   </div>
	  </div>		
	  
    
  
</script> 


<script type="text/template" id="me-comment-template">
	  <div class="post00" data-id="{{id}}">
		    <div class="post_firstline">
		         <div>
			     	<img src="{{commentphoto}}">
		         </div>
		         <div class="post_name">
			     	<div class="post_name01">{{name}}</div>
			     	<div class="post_city">{{city}}</div>
			     </div>
	         </div>
		    <div class='post_comment'></div>
	  </div>		
	  
    
  
</script> 

</html>