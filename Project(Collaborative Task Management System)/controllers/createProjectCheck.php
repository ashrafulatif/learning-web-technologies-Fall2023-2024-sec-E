<?php
    session_start();
    require_once('../model/adminOperationModel.php');

    $CharCheck= '!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`';

    if (isset($_REQUEST['projectName'],$_REQUEST['projectType'],$_REQUEST['projectDetails']))
    {
        $projectName = $_REQUEST['projectName'];
        $projectType = $_REQUEST['projectType'];
        $projectDetails = $_REQUEST['projectDetails'];
    }

    if (empty($projectName)|| empty($projectType)|| empty($projectDetails))
    {
        echo "must fill all the field";
    }
    else if(strpbrk($projectType, $CharCheck)!== false|| strpbrk($projectType, '0123456789')!==false)
    {
        echo "Project Type cannot contain character or number ";
    }
    else{

        $createProject = createProject($projectName,$projectType,$projectDetails);

        if ($createProject)
        {
            header('location:../views/projectManagement.php');
        }
        else 
        {
            echo "can not create project";
        }

    }
    

    

?>

