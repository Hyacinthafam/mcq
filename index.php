<?php
session_start();

//if (!isset($_SESSION['auth_id']))
//header('location:login.php'); 



require_once('dbconn.php');

$count = 1;

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Multi Choice Question</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="css/style.css" rel='stylesheet' type='text/css' />



		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />





 
 
 






		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="#">Multi Choice Question </span></a></h1>
					<nav id="nav">
						<ul>
							
							
							<li><a href="index.php" class="button primary">Restart</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					
					
				</section>

			<!-- Main -->
				<article id="main">
				
				<header class="special container">
				<b>Read this story attentively and questions that follow.</b>
				<p> “True economy is misapprehended, and people go through life without properly comprehending what that principle is. One says, "I have an income of so much, and here is my neighbor who has the same; yet every year he gets something ahead and I fall short; why is it? I know all about economy." He thinks he does, but he does not. There are men who think that economy consists in saving cheese-parings and candle-ends, in cutting off two pence from the laundress' bill and doing all sorts of little, mean, dirty things. Economy is not meanness. The misfortune is, also, that this class of persons let their economy apply in only one direction. They fancy they are so wonderfully economical in saving a half-penny where they ought to spend twopence, that they think they can afford to squander in other directions.”

				Excerpt From: Phineas Taylor Barnum. “Art of Money Getting”. Apple Books. </p> </br>
				<b>You have 15 minutes to complete the 10 multi choice questions</b>
				<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div clas="content">
									<form method="POST" >
										<div clss="row gtr-50">

												<ul class="buttons">
													<li><input type="submit" class="special" name="start" value="Start Questionaire" /></li>
												</ul>

										</div>
									</form>

									<?php
						
                    if ($_SERVER["REQUEST_METHOD"] == 'POST'){

						

							 
							if (isset($_POST['start'])){

								$sql =  ("SELECT * FROM tbl_questions");
								$result = mysqli_query($conn, $sql);
									
								if (mysqli_num_rows($result)>0){
									
											while ($row = mysqli_fetch_array($result)){
				
											$question_id = $row['question_id'];
											$score = $row['score'];
											}
										}

								$question1 = 'Art of Getting Money';
								$question2 = 'misapprehended';
								$question3 = 'meaness';
								$question4 = 'Phineas Taylor Barnum';
								$question5 = 'I know all about economy,He thinks he does, but he does not';
								$question6 = 'Economy';
								$question7 = 'Misfortune';
								$question8 = 'cutting off two pence from the laundress';
								$question9 = 'Appel Books';
								$questionl = '15 mins';
								//$score = 0;

								$sql =("INSERT INTO tbl_questions (question1,question2,question3,question4,question5,question6,question7,question8,question9,questionl,date) VALUES ('$question1','$question2','$question3','$question4','$question5','$question6','$question7','$question8','$question9','$questionl', NOW() ) ") ;
								$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						//$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
							{
							$sqlp = "UPDATE tbl_questions SET score = 0 "; //WHERE question_id = '$question1_id' ";
							$resultp = mysqli_query($conn,$sqlp) or die(mysqli_error($conn));
							}
							
                        echo '
                        









								</div>

						</section>
				<section class="wrapper style4 special container medium">

<!-- Content -->
	
						<table class="table">
							 <thead> 
								 <tr> <b>
									 <th><b>Question One</b></br>The book title is ?
									 </th>
									
									  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
									  
									  
								</tr> 
							</thead> ';
							
				

			echo'				<form method="post">			
										<tbody> 
									<tr class="success">
									
									 <th> <input type="submit"  name="question1" value="Art of Getting Money"/></th> 
										 
										 
										
									</tr> 
									<tr class="success">
									<th><input type="submit"  name="question1" value="True Economy"/></th>  
										
										 
										
									</tr> 
									<tr class="success">
									<th> <input type="submit"  name="question1" value ="Money is everything"/></th>  
										
										
										 
										
									</tr> 
									<tr class="success">
									<th> <input type="submit"  name="question1" value="Art of Money Getting "/></th>  
										
										 
										 
										
									</tr> 
									
									
			
								</tbody>
								
					</form>


							 </table> 
							 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						</div>
						
						';
						
						
					}//else{ 
						//$question1 = $_POST['question1'];
						if(isset($_POST['question1'])){


							$question1 = $_POST['question1'];
				$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
				//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
				$sql =  ("SELECT * FROM tbl_questions WHERE question1 = '$question1' ");//AND question_id = '$question_id");
				$result = mysqli_query($conn, $sql);
					
				if (mysqli_num_rows($result)>0){
					//output data for each row
						//while($row=mysqli_fetch_assoc($result)){
							while ($row = mysqli_fetch_array($result)){

							$question_id = $row['question_id'];
							$score = $row['score'];
							$question1 = $row['question1'];
						
						//echo '<script>alert("Login Successful"); </script>' ;
						//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
							//}
						//exit();
						
						
           
							$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
				
							$sql = "UPDATE tbl_questions SET score = $score + 5 "; //WHERE question_id = '$question1_id' ";
							$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
						  }
						}
					
						
						echo '
						</div>

						</section>
				<section class="wrapper style4 special container medium"> 
	
						<table class="table">
							 <thead> 
								 <tr> <b>
									 <th><b>Question Two</b></br> According to the writer "True Economy is"</th>
									
									  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
									  
									  
								</tr> 
							</thead>
						<form method="post">			
						<tbody> 
					<tr class="success">
					 <th> <input type="submit"  name="question2" value="Distributed"/></th> 
						 
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question2" value="miscontrued"/></th>  
						
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question2" value="misapprehended"/></th>  
						
						
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question2" value ="misfortune"/></th>   
						

					</tr> 
			
				</tbody>
	</form>

			 </table> 
			 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
		</div>';
						}

						if(isset($_POST['question2'])){

								$question2 = $_POST['question2'];
					$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
					//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
					$sql =  ("SELECT * FROM tbl_questions WHERE question2 = '$question2' ");
					$result = mysqli_query($conn, $sql);
						
					if (mysqli_num_rows($result)>0){
						//output data for each row
							//while($row=mysqli_fetch_assoc($result)){
								while ($row = mysqli_fetch_array($result)){
	
								$question_id = $row['question_id'];
								$score = $row['score'];
								$question2 = $row['question2'];
							
							//echo '<script>alert("Login Successful"); </script>' ;
							//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
								//}
							//exit();
							
							// if ($row['question1'] == $question1 ){
								//if ($row['question1'] == ($_POST['question1'] )){
	
								//$sql_u = "UPDATE tbl_providehelp SET user_status = 1 WHERE user_sm = '$user_sm' AND swift_plan = '$swift_plan' AND investment_id = '$investment_id' ";
			   
								$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
					
								$sql = "UPDATE tbl_questions SET score = $score + 5 "; //WHERE question_id = '$question1_id' ";
								$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
							 }
							}
						
						echo '
						</div>

						</section>
				<section class="wrapper style4 special container medium">

<!-- Content -->
	
						<table class="table">
							 <thead> 
								 <tr> <b>
									 <th><b>Question Three</b></br> According to the writer Economy is not </th>
									
									  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
									  
									  
								</tr> 
							</thead>
						<form method="post">			
						<tbody> 
					<tr class="success">
					 <th> <input type="submit"  name="question3" value="smartness"/></th> 
						 
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question3" value ="meaness"/></th>    
						
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question3" value="manness"/></th>  
						
						
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question3" value="goodness"/></th>  
						
						 
						 
						
					</tr> 
					
					

				</tbody>
	</form>


			 </table> 
			 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
		</div>';

						}
						if(isset($_POST['question3'])){

							$question3 = $_POST['question3'];
							$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
							//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
							$sql =  ("SELECT * FROM tbl_questions WHERE question3 = '$question3' ");
							$result = mysqli_query($conn, $sql);
								
							if (mysqli_num_rows($result)>0){
								//output data for each row
									//while($row=mysqli_fetch_assoc($result)){
										while ($row = mysqli_fetch_array($result)){
			
										$question_id = $row['question_id'];
										$score = $row['score'];
										$question3 = $row['question3'];
									
									//echo '<script>alert("Login Successful"); </script>' ;
									//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
										//}
									//exit();
									
									// if ($row['question1'] == $question1 ){
										//if ($row['question1'] == ($_POST['question1'] )){
			
										//$sql_u = "UPDATE tbl_providehelp SET user_status = 1 WHERE user_sm = '$user_sm' AND swift_plan = '$swift_plan' AND investment_id = '$investment_id' ";
					   
										$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
							
										$sql = "UPDATE tbl_questions SET score = $score + 5 ";//WHERE question_id = '$question1_id' ";
										$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
									 }
									}
							echo '
							</div>
	
							</section>
					<section class="wrapper style4 special container medium">
	
	<!-- Content -->
		
							<table class="table">
								 <thead> 
									 <tr> <b>
										 <th><b>Question Four</b></br>
										 The Author of the Excerpt</th>
										
										  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
										  
										  
									</tr> 
								</thead>
							<form method="post">			
							<tbody> 
						<tr class="success">
						 <th> <input type="submit"  name="question4" value="Phineas Taylor Bernum"/></th> 
							 
							 
							
						</tr> 
						<tr class="success">
						<th> <input type="submit"  name="question4" value ="Phineas Taylo Bernum"/></th>   
							
							 
							
						</tr> 
						<tr class="success">
						<th> <input type="submit"  name="question4" value="Phinneas Taylor Bernum"/></th>  
							
							
							 
							
						</tr> 
						<tr class="success">
						<th> <input type="submit"  name="question4" value="Phineas Taylor Barnum"/></th>  
							
							 
							 
							
						</tr> 
						
						
	
					</tbody>
		</form>
	
	
				 </table> 
				 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
			</div>';
	
							}

							if(isset($_POST['question4'])){
								$question4 = $_POST['question4'];
							$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
							//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
							$sql =  ("SELECT * FROM tbl_questions WHERE question4 = '$question4' ");
							$result = mysqli_query($conn, $sql);
								
							if (mysqli_num_rows($result)>0){
								//output data for each row
									//while($row=mysqli_fetch_assoc($result)){
										while ($row = mysqli_fetch_array($result)){
			
										$question_id = $row['question_id'];
										$score = $row['score'];
										$question4 = $row['question4'];
									
									//echo '<script>alert("Login Successful"); </script>' ;
									//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
										//}
									//exit();
									
									// if ($row['question1'] == $question1 ){
										//if ($row['question1'] == ($_POST['question1'] )){
			
										//$sql_u = "UPDATE tbl_providehelp SET user_status = 1 WHERE user_sm = '$user_sm' AND swift_plan = '$swift_plan' AND investment_id = '$investment_id' ";
					   
										$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
							
										$sql = "UPDATE tbl_questions SET score = $score + 5 ";//WHERE question_id = '$question1_id' ";
										$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
									 }
									}
								echo '
								</div>
		
								</section>
						<section class="wrapper style4 special container medium">
		
		<!-- Content -->
			
								<table class="table">
									 <thead> 
										 <tr> <b>
											 <th><b>Question Five</b></br>Choose the correct sentence from the excerpt</th>
											
											  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
											  
											  
										</tr> 
									</thead>
								<form method="post">			
								<tbody> 
							<tr class="success">
							 <th> <input type="submit"  name="question5" value="I know all about economy,He thinks he does, but he does not"/></th> 
								 
								 
								
							</tr> 
							<tr class="success">
							<th> <input type="submit"  name="question5" value="I know all about money,He thinks he does, but he does not"/></th>  
								
								 
								
							</tr> 
							<tr class="success">
							<th> <input type="submit"  name="question5" value ="I know all about economy,He thinks he does, but he knows"/></th>  
								
								
								 
								
							</tr> 
							<tr class="success">
							<th> <input type="submit"  name="question5" value="I know all about money,He thinks he doe not, but he does"/></th>  
								
								 
								 
								
							</tr> 
							
							
		
						</tbody>
			</form>
		
		
					 </table> 
					 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
				</div>';
				}

				if(isset($_POST['question5'])){
					$question5 = $_POST['question5'];
							$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
							//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
							$sql =  ("SELECT * FROM tbl_questions WHERE question5 = '$question5' ");
							$result = mysqli_query($conn, $sql);
								
							if (mysqli_num_rows($result)>0){
								//output data for each row
									//while($row=mysqli_fetch_assoc($result)){
										while ($row = mysqli_fetch_array($result)){
			
										$question_id = $row['question_id'];
										$score = $row['score'];
										$question5 = $row['question5'];
									
									//echo '<script>alert("Login Successful"); </script>' ;
									//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
										//}
									//exit();
									
									// if ($row['question1'] == $question1 ){
										//if ($row['question1'] == ($_POST['question1'] )){
			
										//$sql_u = "UPDATE tbl_providehelp SET user_status = 1 WHERE user_sm = '$user_sm' AND swift_plan = '$swift_plan' AND investment_id = '$investment_id' ";
					   
										$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
							
										$sql = "UPDATE tbl_questions SET score = $score + 5 ";//WHERE question_id = '$question1_id' ";
										$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
									 }
									}
					echo '
					</div>

					</section>
			<section class="wrapper style4 special container medium">

<!-- Content -->

					<table class="table">
						 <thead> 
							 <tr> <b>
								 <th><b>Question Six</b></br> Most people go through life without comprehending the principle of ?</th>
								
								  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
								  
								  
							</tr> 
						</thead>
					<form method="post">			
					<tbody> 
				<tr class="success">
				 <th> <input type="submit"  name="question6" value="Life"/></th> 
					 
					 
					
				</tr> 
				<tr class="success">
				<th> <input type="submit"  name="question6" value ="Wealth"/></th>  
					
					 
					
				</tr> 
				<tr class="success">
				<th> <input type="submit"  name="question6" value="Economy"/></th>  
					
					
					 
					
				</tr> 
				<tr class="success">
				<th> <input type="submit"  name="question6" value="Money"/></th>  
					
					 
					 
					
				</tr> 
				
				

			</tbody>
</form>


		 </table> 
		 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
	</div>';

					}
					if(isset($_POST['question6'])){
						$question6 = $_POST['question6'];
							$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
							//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
							$sql =  ("SELECT * FROM tbl_questions WHERE question6 = '$question6' ");
							$result = mysqli_query($conn, $sql);
								
							if (mysqli_num_rows($result)>0){
								//output data for each row
									//while($row=mysqli_fetch_assoc($result)){
										while ($row = mysqli_fetch_array($result)){
			
										$question_id = $row['question_id'];
										$score = $row['score'];
										$question6 = $row['question6'];
									
									//echo '<script>alert("Login Successful"); </script>' ;
									//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
									//	}
									//exit();
									
									// if ($row['question1'] == $question1 ){
										//if ($row['question1'] == ($_POST['question1'] )){
			
										//$sql_u = "UPDATE tbl_providehelp SET user_status = 1 WHERE user_sm = '$user_sm' AND swift_plan = '$swift_plan' AND investment_id = '$investment_id' ";
					   
										$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
							
										$sql = "UPDATE tbl_questions SET score = $score + 5 ";//WHERE question_id = '$question1_id' ";
										$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
									 }
									}
						echo '
						</div>

						</section>
				<section class="wrapper style4 special container medium">

<!-- Content -->
	
						<table class="table">
							 <thead> 
								 <tr> <b>
									 <th><b>Question Seven</b></br>What adjective best describes letting econmoy apply in one directon, according to excerpt</th>
									
									  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
									  
									  
								</tr> 
							</thead>
						<form method="post">			
						<tbody> 
					<tr class="success">
					 <th> <input type="submit"  name="question7" value="Misfortune"/></th> 
						 
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question7" value ="Unlucky"/></th>  
						
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question7" value="Smartness"/></th>  
						
						
						 
						
					</tr> 
					<tr class="success">
					<th> <input type="submit"  name="question7" value="Expert"/></th>  
						
						 
						 
						
					</tr> 
					
					

				</tbody>
	</form>


			 </table> 
			 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
		</div>';

						}
						if(isset($_POST['question7'])){
							$question7 = $_POST['question7'];
							$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
							//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
							$sql =  ("SELECT * FROM tbl_questions WHERE question7 = '$question7' ");
							$result = mysqli_query($conn, $sql);
								
							if (mysqli_num_rows($result)>0){
								//output data for each row
									//while($row=mysqli_fetch_assoc($result)){
										while ($row = mysqli_fetch_array($result)){
			
										$question_id = $row['question_id'];
										$score = $row['score'];
										$question7 = $row['question7'];
									
									//echo '<script>alert("Login Successful"); </script>' ;
									//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
										//}
									//exit();
									
									// if ($row['question1'] == $question1 ){
										//if ($row['question1'] == ($_POST['question1'] )){
			
										//$sql_u = "UPDATE tbl_providehelp SET user_status = 1 WHERE user_sm = '$user_sm' AND swift_plan = '$swift_plan' AND investment_id = '$investment_id' ";
					   
										$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
							
										$sql = "UPDATE tbl_questions SET score = $score + 5 ";//WHERE question_id = '$question1_id' ";
										$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
									 }
									}
							echo '
							</div>
	
							</section>
					<section class="wrapper style4 special container medium">
	
	<!-- Content -->
		
							<table class="table">
								 <thead> 
									 <tr> <b>
										 <th><b>Question Eight</b></br> There are men who think that economy consists in </th>
										
										  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
										  
										  
									</tr> 
								</thead>
							<form method="post">			
							<tbody> 
						<tr class="success">
						 <th> <input type="submit"  name="question8" value ="cutting off two pence from the laundress"/></th>  
							 
							 
							
						</tr> 
						<tr class="success">
						<th> <input type="submit"  name="question8" value="cutting grass and weeding the farm"/></th>  
							
							 
							
						</tr> 
						<tr class="success">
						<th> <input type="submit"  name="question8" value="careful with spending"/></th>  
							
							
							 
							
						</tr> 
						<tr class="success">
						<th> <input type="submit"  name="question8" value="saving a half penny "/></th>  
							
							 
							 
							
						</tr> 
						
						
	
					</tbody>
		</form>
	
	
				 </table> 
				 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
			</div>';
	
							}

							if(isset($_POST['question8'])){
								$question8 = $_POST['question8'];
								$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
								//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
								$sql =  ("SELECT * FROM tbl_questions WHERE question8 = '$question8' ");
								$result = mysqli_query($conn, $sql);
									
								if (mysqli_num_rows($result)>0){
									//output data for each row
										//while($row=mysqli_fetch_assoc($result)){
											while ($row = mysqli_fetch_array($result)){
				
											$question_id = $row['question_id'];
											$score = $row['score'];
											$question8 = $row['question8'];
										
										//echo '<script>alert("Login Successful"); </script>' ;
										//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
											//}
										//exit();
										
										// if ($row['question1'] == $question1 ){
											//if ($row['question1'] == ($_POST['question1'] )){
				
											//$sql_u = "UPDATE tbl_providehelp SET user_status = 1 WHERE user_sm = '$user_sm' AND swift_plan = '$swift_plan' AND investment_id = '$investment_id' ";
						   
											$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
								
											$sql = "UPDATE tbl_questions SET score = $score + 5 ";//WHERE question_id = '$question1_id' ";
											$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
										 }
										}
								echo '
								</div>
		
								</section>
						<section class="wrapper style4 special container medium">
		
		<!-- Content -->
			
								<table class="table">
									 <thead> 
										 <tr> <b>
											 <th><b>Question Nine</b></br> The Excerpt was culled from </th>
											
											  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
											  
											  
										</tr> 
									</thead>
								<form method="post">			
								<tbody> 
							<tr class="success">
							 <th> <input type="submit"  name="question9" value="Appel Books"/></th> 
								 
								 
								
							</tr> 
							<tr class="success">
							<th> <input type="submit"  name="question9" value="Amazon Books"/></th>  
								
								 
								
							</tr> 
							<tr class="success">
							<th> <input type="submit"  name="question9" value="Apple Books"/></th>  
								
								
								 
								
							</tr> 
							<tr class="success">
							<th> <input type="submit"  name="question9" value ="Google Books"/></th>  
								
								 
								 
								
							</tr> 
							
							
		
						</tbody>
			</form>
		
		
					 </table> 
					 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
				</div>';
		
								}
								
								if(isset($_POST['question9'])){
									$question9 = $_POST['question9'];
									$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
									//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
									$sql =  ("SELECT * FROM tbl_questions WHERE question9 = '$question9' ");
									$result = mysqli_query($conn, $sql);
										
									if (mysqli_num_rows($result)>0){
										//output data for each row
											//while($row=mysqli_fetch_assoc($result)){
												while ($row = mysqli_fetch_array($result)){
					
												$question_id = $row['question_id'];
												$score = $row['score'];
												$question9 = $row['question9'];
											
											//echo '<script>alert("Login Successful"); </script>' ;
											//echo'<meta http-equiv="refresh" content="0; URL=data.php">';
												
											//exit();
											
											// if ($row['question1'] == $question1 ){
												//if ($row['question1'] == ($_POST['question1'] )){
					
												//$sql_u = "UPDATE tbl_providehelp SET user_status = 1 WHERE user_sm = '$user_sm' AND swift_plan = '$swift_plan' AND investment_id = '$investment_id' ";
							   
												$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
									
												$sql = "UPDATE tbl_questions SET score = $score + 5 ";//WHERE question_id = '$question1_id' ";
												$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
											 }
											}
									echo '
									</div>
			
									</section>
							<section class="wrapper style4 special container medium">
			
			<!-- Content -->
				
									<table class="table">
										 <thead> 
											 <tr> <b>
												 <th><b>Last Question</b>The Multichoice question is timed to </th>
												
												  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
										
											</tr> 
										</thead>
									<form method="post">			
									<tbody> 
								<tr class="success">
								 <th> <input type="submit"  name="questionl" value="15 mins"/></th> 
							
								</tr> 
								<tr class="success">
								<th> <input type="submit"  name="questionl" value="30 mins"/></th>  
							
								</tr> 
								<tr class="success">
								<th> <input type="submit"  name="questionl" value ="50 mins"/></th>   
							
								</tr> 
								<tr class="success">
								<th> <input type="submit"  name="questionl" value="80 mins"/></th>  
							
								</tr> 
							
							</tbody>
							</form>
			
						 </table> 
						 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
					</div>';
			
									}
									if(isset($_POST['questionl'])){
										$questionl = $_POST['questionl'];
										$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
										//$sql =  ("INSERT INTO  tbl_questions (question1,date) VALUES ('$question1', NOW() ");
										$sql =  ("SELECT * FROM tbl_questions WHERE questionl = '$questionl' ");
										$result = mysqli_query($conn, $sql);
											
										if (mysqli_num_rows($result)>0){
											//output data for each row
												//while($row=mysqli_fetch_assoc($result)){
													while ($row = mysqli_fetch_array($result)){
						
													$question_id = $row['question_id'];
													$score = $row['score'];
													$questionl = $row['questionl'];
													
													$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) ;
										
													$sql = "UPDATE tbl_questions SET score = $score + 5 ";//WHERE question_id = '$question1_id' ";
													$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
													}
													$finalscore = $score * 2;
													if ($finalscore >= 70){
														echo '<b style="color:green">Congratulations You Passed</b>';
													
													 }else{
														echo '<b style="color:red">You Failed Please Try Again !!</b>';
													}
												
												
										echo '
										</div>
				
										</section>
											<section class="wrapper style4 special container medium">

										<table class="table">
											 <thead> 
												 <tr> <b>
													 <th><b>Thank you your score is '.$finalscore.'</b></th>
													
													  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
													  
													  
												</tr> 
											</thead>
												 </table> 
												</div>';

											}else{

													$finalscore = $score * 2;
													if ($finalscore >= 70){
														echo '<b style="color:green"> Congratulations You Passed</b>';
													
													 }else{
														echo '<b style="color:red">You Failed Please Try Again !!</b>';
													}
													echo '
										</div>
				
										</section>
								<section class="wrapper style4 special container medium">
				
				<!-- Content -->
					
										<table class="table">
											 <thead> 
												 <tr> <b>
													 <th><b>Thank you your score is '.$finalscore.'</b></th>
													
													  <th><b class="text-danger" id="Countdowntimer"><?php echo $nowtime?></b></th> 
													  
													  
												</tr> 
											</thead>

				
				
							 </table> 
							 <p><i style="color:black">choose the correct answer by clicking on the correct option from the list</i></p>
						
						</div>';
												}
				
										}
									
		
					}
				
?>			 
					</header>
					<!-- One -->
						
					<!-- Two -->
					

					<!-- Three -->


				</article>

			<!-- CTA -->
				

			<!-- Footer -->
				<!-- Footer -->
				<footer id="footer">

					

					<ul class="copyright">
					<?php date_default_timezone_set("Africa/Egypt");?>
						<li>&copy; Youngstars Foundation</li><li> All Rights Reserved <?php echo date("Y");?></a></li>
					</ul>

				</footer>


		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

<script>
<?php

$nowtime = date("d H:i:s");
//echo $nowtime;
//$paymentexpiry_time =  $nowtime;          

?>
// Set the date we're counting down to
var countDownDate = new Date("September 5, 2020 00:01:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("Countdowntimer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("Countdowntimer").innerHTML = "EXPIRED";
	window.location.href = "index.php";
  }
}, 1000);
</script>