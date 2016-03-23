<div id="layout">

	<!----------- MENU ---------->
	<?php include('menu_B.php');?>

	<div id="main">
        <div class="header">
            <h1>Upload File</h1>
        </div>
	
		<?php 
		// File uploaded
		if ($act == 'uploadDone') {

		$pwd = (!empty($_POST['pwd']) ? $_POST['pwd'] : "noGo");
		
			$target_dir = "";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			
			$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			while(true) {
			
				// Check pwd
				if ($pwd != 'shorts') {
					echo "Wrong PWD";
					$uploadOk = 0;
					break;
				}

			
				// Check file size - Limit to 500 kb
				if ($_FILES["fileToUpload"]["size"] > 500000) {
					echo "Sorry, your file is too large.";
					$uploadOk = 0;
					break;
				}
				
				// Allow certain file formats
				if($FileType != "php") {
					echo "Sorry, only PHP files are allowed.";
					$uploadOk = 0;
					break;
				}
				
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "<p>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</p>";
					echo '<p><a href="'.basename( $_FILES["fileToUpload"]["name"]).'" target="_blank">Here it is.</a></p>';
				} else {
					echo "Sorry, there was an error uploading your file.";
					break;
				}				
				
				break;
			}	
			
			echo '<hr>';
			
		}
		?>
	
        <div class="content">
            
			<p>Upload a file</p>

			<form action="index.php?act=uploadDone" method="post" enctype="multipart/form-data">
				Select file to upload:
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="upload" name="submit">
				
				<p>Password: <input type="text" name="pwd"></p>
			</form>

        </div>

    </div>
</div>