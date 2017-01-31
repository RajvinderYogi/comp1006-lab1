<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LAB1- Teams</title>
        <!-- CSS link here-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <?php
        //Make DATABASE connection
        $conn =new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=comp1006lab1','bd37408b7c17da','a7a274f4');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //Set Up SQL query
        $sql ="SELECT * FROM teams ORDER BY city";
        // run and store results
        $cmd =$conn->prepare($sql);
        $cmd->execute();
        $playingteams =$cmd->fetchAll();
        //display the data in a table
        echo '<table class ="table table-striped table-hover"><tr><th>City</th><th>Nickname</th><th>Division</th></tr>';
        //use for loop through the data
        foreach($playingteams AS $playingteam) {
        echo '<tr><td>' . $playingteam ['city'] . '</td>
        <td>' . $playingteam ['nickname'] . '</td>
        <td>' . $playingteam ['division'] . '</td> </tr>';
        }
        //end table
        echo '</table>';
        //terminate the connection
        $conn=null;
        ?>
        <!-- JAVA Script Here -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>