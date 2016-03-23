<div id="layout">

	<!----------- MENU ---------->
	<?php include('menu_B.php'); ?>

	<div id="main">
        <div class="header">
            <h1>Hire...</h1>
            <h2>Share Your Farming Gear</h2>
        </div>
	
        <div class="content">
            <h2 class="content-subhead">Existing Searches</h2>
            <p>You have XX existing searches.  We have found XX matches, shown below.</p>
            <p>Sortable Table... </p>
            <form action="#" method="post"><h2 class="content-subhead">New Search</h2>
                <p><select name="Search_Type">
                <option value="what_want_to_do">What Do You Want To Do?</option>    
                <option value="hire_Contracting">Hire Contractors</option>
                <option value="hire_Rental">Hire Rental Machinery</option>
                <option value="hire_Labour">Hire Labour</option>
                <option value="Inv_Shared_Mach_Ownership">Investigate Sharing Machinery Ownership</option>
                </select>
                <input type="submit" name="submit" value="Submit" />
            </form>
                </p>
            
            <?php
            
            $selected_val = $_POST['Search_Type'];  // Storing Selected Value In Variable
            if ($selected_val=="what_want_to_do")
            {
                echo "Please Make A Selection";
            }
            elseif ($selected_val=="hire_Contracting")
            {
                echo "Put hire contracting jazz here";
                
                
            }
            elseif ($selected_val=="hire_Rental")
            {
                echo "Put hire rental jazz here";
            }
            elseif ($selected_val=="hire_Labour")
            {
                echo "Put hire labour jazz here";
                
                
            }
            elseif ($selected_val=="Inv_Shared_Mach_Ownership")
            {
                echo "Put investigate shared machinery ownership jazz here";
                
            }
        
            ?>
            
        </div>

    </div>
</div>