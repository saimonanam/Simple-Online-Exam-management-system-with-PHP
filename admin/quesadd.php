<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>
<style>
.adminpanel{width: 574px; color: #02527D; margin: 20px auto 0; padding: 10px; border: 1px solid #ddd;}
</style>

<div class="main">
<h1>Admin Panel- Add Question</h1>
<div class="adminpanel">
	<form action="" method="post">
		<table>
			<tr>
				<td>Question No</td>
				<td>:</td>
				<td><input type="number" value="" name="quesNo"/></td>
			</tr>
			<tr>
				<td>Question</td>
				<td>:</td>
				<td><input type="text" name="ques" placeholder="Enter Questions...." required/></td>
			</tr>
			<tr>
				<td>Choice One</td>
				<td>:</td>
				<td><input type="text" name="ans1" placeholder="Choice One...." required/></td>
			</tr>
			<tr>
				<td>Choice Two</td>
				<td>:</td>
				<td><input type="text" name="ans2" placeholder="Choice Two...." required/></td>
			</tr>
			<tr>
				<td>Choice Three</td>
				<td>:</td>
				<td><input type="text" name="ans3" placeholder="Choice Three...." required/></td>
			</tr>
			<tr>
				<td>Choice Four</td>
				<td>:</td>
				<td><input type="text" name="ans4" placeholder="Choice Four...." required/></td>
			</tr>
			<tr>
				<td>Correct No.</td>
				<td>:</td>
				<td><input type="number" name="rightAns" required/></td>	
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" value="Add a Question"/>
				</td>
			</tr>
		</table>
	</form>
</div>


	
</div>
<?php include 'inc/footer.php'; ?>