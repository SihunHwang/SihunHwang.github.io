<!DOCTYPE html>
<head>
    <style>
    .sidebar{
        background-color:rgb(255, 255, 255);
        height:100%;
        position:fixed;
        width:200px;
        top:0;
        left:0;
        overflow: hidden;
        padding-top:20px;
    }
    .sidebar a{
        padding:6px 8px 6px 16px;
        font-size: 25px;
        display: block;
        color:#777777;
        text-decoration: none;
    }
    .sidebar a:hover{
        color:rgb(48, 48, 48)
    }
    .sidebar h2{
        display: block;
        color: black;
        font-size: 32px;
        padding:6px 8px 6px 16px;
    }
    .active{
        background-color: rgb(166, 75, 241);
    }
    .main {
        margin-left: 200px; 
        padding: 0px 10px;
    }
    .body{
        background-color: rgb(0, 0, 0);
        font-family: andale mono,monospace;
    }
    </style>
    <title>home</title>
</head>
<body class='body'>
    <div class='sidebar'>
        <?php include 'sidebar.php';?>
    </div>
</body>