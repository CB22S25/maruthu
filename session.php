<?php
function getUserSessionDetails($username)
{
    // Construct the shell command
    $command = "query user $username";
    
    // Execute the command and capture the output
    $output = shell_exec($command);
    
    // Check if the output is not empty
    if ($output)
    {
        echo "Session Details for User: $username\n";
        echo $output;
    }
    else
    {
        echo "No session details found for user: $username\n";
    }
}

// Define the username to search for
$username = "syscs";

// Call the function
getUserSessionDetails($username);
?>
