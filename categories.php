<?php 
    require_once 'Include/DB.php'; 
    include_once 'Base/header.php';

    echo "<title>Categories</title>";

    include_once 'Base/body.php';    
?>


<h1>Manage Categories</h1>
    <div>
        <form action="categories.php" method="post">
             <fieldset>
                <div class="form-group">
                       
                    <label for="category_name">Name:</label>
                    <input class="form-control" type="text" name="category" id="category_name" placeholder="Name">
                        
                </div>
                <br>
                <input class="btn btn-success" type="submit" name="submit" value="Add New Category">
            </fieldset>
             <br>
        </form>
    </div>


<?php 
    include 'Base/footer.php';
?>


