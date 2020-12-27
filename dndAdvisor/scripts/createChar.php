<?php
    session_start();
    require_once "connect.php";

    

    if(isset($_SESSION['logged']['user_id']) == false)
    {
        $_SESSION['info'] = '<span style="color:red"user is not loged in</span><br>';
        header('location: ../pages/logged/index2.php');
        exit();
    }
    $userId = $_SESSION['logged']['user_id'];

    $name = $_POST['characterName'];

    /*if(ctype_alnum($name) == false || $name == "")
	{
		
		$_SESSION['info'] = '<span style="color:red">Character name can only have alphanumeric and must be filed</span><br>';
        header('location: ../pages/logged/index2.php');
        exit();
    }*/

    $desc = $_POST['characterDescription'];

    $descTest = htmlentities($desc, ENT_QUOTES, "UTF-8");

    if($desc != $descTest)
    {
        $_SESSION['info'] = '<span style="color:red">Wrong descryption</span><br>';
        header('location: ../pages/logged/index2.php');
    }


    if($conn->connect_errno == 0)
    {
        $race = $_POST['race'];
        $class = $_POST['class'];
        $agility = rand(10,20);
        $strength = rand(10,20);
        $wisdom = rand(10,20);

          //$addCharacter = "INSERT INTO characters VALUES (".$userId.",".$name.",".$race.",".$class.",".$desc.",".$agility.",".$strength.",".$wisdom.")";
            $addCharacter = "INSERT INTO characters
            (owner_id, name, race_id, class_id, description, agility, strength, wisdom)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($addCharacter);
            $stmt->bind_param("issssiii", $userId, $name, $race, $class, $desc, $agility, $strength, $wisdom);

        if($stmt->execute())
        {
            $_SESSION['info'] = '<span style="color:green">character added</span><br>';
        }
        else
        {
            $_SESSION['info'] = '<span style="color:red">something went wrong</span><br>';
        }

        $conn->close();
    }
    else{
        $_SESSION['info'] = '<span style="color:red">Blad w zapytaniu SQL</span><br>';
    }
    header('location: ../pages/logged/index2.php');
?>