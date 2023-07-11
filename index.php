<?php
    $firstNumber = 3;
    $secondNumber = 6;
    $result = $firstNumber + $secondNumber;
    echo( $result );

    
       // 1.Create a database connection

       $databaseConnection = mysqli_connect( "localhost", "root", "root", "tinySocial");
       if ( mysqli_connect_errno () ) {
            exit( "Database connection failed" );
       }

       echo ( "Connection to the database is successful" );

       // 2.Perform a database query

       // 3.Use return data from database

       // 4.Release the return data

       // 5.Close the database connection
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>To Do List</title>
    </head>
    <body>
        <h1>Your To Do List</h1>
        <p>Use this to do tracker to do improve your output an increase the amount of work you can manage</p>
        <div class = "container">
            <h2> To Do List</h2>
            <p><em>CLick and drag to reorder, double click to cross an item off.</em></p>
              
		<form name="toDoList">
			<input type="text" name="ListItem"/>
		</form>
    
		<div id="button">Add</div>
		<br/>
		<ol></ol>
      
      
    
    </div>
	</body>
            

        </div>
    </body>
</html>
