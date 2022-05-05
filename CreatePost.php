<?php
    $user = $_POST["name"];
    $post = $_POST["post"];
    $mysqli = new mysqli("129.237.87.5", "c743h357", "pieJeo7g", "c743h357");
    if($mysqli->connect_errno){
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $query = "SELECT UserID FROM Users";
    $Table = false;
    if($result = $mysqli->query($query))
    {
        while($row = $result->fetch_assoc())
        {
            if($row['UserID'] == $user)
            {
                $Table = true;
            }
        }
    }
    if($user == "")
    {
        echo "The username should not be empty!";
    }
    else if(!$Table)
    {
        echo "The user doesn't exist!";
    }
    else if($post == "")
    {
        echo "The post should not be empty!";
    }
    else
    { 
        $sql = "INSERT INTO Posts (Content, AuthorID) VALUES ('".$post."', '".$user."')";
        if($mysqli->query($sql) === TRUE)
        {
            echo "New post is created successfully!";
        }
        else
        {
            echo "The user already exists!";
        }     
    }
?>
