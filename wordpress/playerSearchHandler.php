<?php
    
    /** MySQL database name */
    define('DB_NAME', 'basketball');
    
    /** MySQL database username */
    define('DB_USER', 'root');
    
    /** MySQL database password */
    define('DB_PASSWORD', 'root');
    
    /** MySQL hostname */
    define('DB_HOST', 'localhost');
    
    /** Player Name entered on form sheet*/
    $playerName = $_POST['playerName'];
    
    if (!$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)) {
        echo 'Could not connect to mysql';
        exit;
    }
    
    if (!mysql_select_db(DB_NAME, $link)) {
        echo 'Could not select database';
        exit;
    }
    
    
    if (empty($_POST[playerName])) {
        
        // Default behavior if player name is not specified
        $sql    = sprintf("SELECT * FROM playerTable");
    } else {
        
        // Select specific player
        $sql    = sprintf("SELECT * FROM playerTable WHERE PlayerName = '%s'", $playerName);
    }

    $result = mysql_query($sql, $link);
    
    if (!$result) {
        echo "DB Error, could not query the database\n";
        echo "MySQL Error: " . mysql_error();
        exit;
    }
    
    
    // Create a table to display results
    echo '<style>table, th, td { border: 1px solid black;}</style>';
    
    echo '<table>';
        echo '<tr>';
            echo '<th>PlayerID</th>';
            echo '<th>PlayerName</th>';
            echo '<th>TeamID</th>';
            echo '<th>FG Made</th>';
            echo '<th>FG Attempted</th>';
            echo '<th>FG Percentage</th>';
            echo '<th>FT Made</th>';
            echo '<th>FT Attempted</th>';
            echo '<th>FT Percentage</th>';
            echo '<th>3pt Made</th>';
            echo '<th>3pt Attempted</th>';
            echo '<th>3pt Percentage</th>';
        echo '</tr>';
    
    // Fill table with results of query
    while ($row = mysql_fetch_assoc($result)) {
        
        echo '<tr>';
            echo '<td>' . $row["PlayerID"]     . '</td>';
            echo '<td>' . $row["PlayerName"]   . '</td>';
            echo '<td>' . $row["TeamID"]       . '</td>';
            echo '<td>' . $row["FGMade"]       . '</td>';
            echo '<td>' . $row["FGAttempt"]    . '</td>';
            echo '<td>' . $row["FGPercentage"] . '</td>';
            echo '<td>' . $row["FTMade"]       . '</td>';
            echo '<td>' . $row["FGAttempt"]    . '</td>';
            echo '<td>' . $row["FGPercentage"] . '</td>';
            echo '<td>' . $row["3ptMade"]      . '</td>';
            echo '<td>' . $row["3ptAttempted"] . '</td>';
            echo '<td>' . $row["3ptPercentage"]. '</td>';
        echo '</tr>';
        
    }
    
    echo '</table>';
    
    mysql_free_result($result);
    
?>
