<div id="layout">

	<!----------- MENU ---------->
	<?php include('menu_B.php'); ?>

	<div id="main">
        <div class="header">
            <h1>Provide...</h1>
            <h2>Share Your Farming Gear</h2>
        </div>
	
        <div class="content">
            <h2 class="content-subhead">Existing Listings</h2>
            <p>Sortable Table... </p>
            <h2 class="content-subhead">New Listing</h2>
            <form action="#" method="post">
                <p><select name="Search_Type">
                <option value="what_want_to_provide">What Do You Want To Do?</option>    
                <option value="hire_Contracting">Provide Contractors</option>
                <option value="hire_Rental">Provide Rental Machinery</option>
                <option value="hire_Labour">Provide Labour</option>
                <option value="inv_shared_machinery">Investiage Shared Machinery Ownership</option>
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
                echo "Put provide contracting jazz here";
                
                
            }
            elseif ($selected_val=="hire_Rental")
            {
                echo "Put provide rental jazz here";
            }
            elseif ($selected_val=="hire_Labour")
            {
                echo "Put provide labour jazz here";
                
                
            }
            elseif ($selected_val=="hire_Labour")
            {
                echo "Put investigate shared machinery ownership jazz here";
                
                
            }
        
            ?>
            
        </div>

    </div>
</div>