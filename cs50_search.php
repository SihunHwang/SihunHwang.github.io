<!DOCTYPE html>
<html>
<head>
    <link href='./style.css' rel='stylesheet'>
    <!--<script scr='active_menu.js'></script>-->
    <title>cs50 search</title>
</head>
<body>
<?php include 'sidebar.php'?>
<div class='main'>
    <h1>Search<br><br></h1>
    <h3>Learnt how to use AI to solve search problems.
    <br>Coverd Breadth-First-Search, Depth-First-Search, Minimax algorithm.<br><br><br></h3>
    <h2>Project: Degrees</h2>
    <h3>Breadth-First-Search</h3>
    <h3>Program that determines how many “degrees of separation” apart two actors are.<br>
        The part that I wrote is the 'shortest path' function in degrees.py file.<br><br>
        According to the Six Degrees of Kevin Bacon game, anyone in the Hollywood film industry can be connected to Kevin Bacon within six steps, where each step consists of finding a film that two actors both starred in.<br><br>
        In this problem, we’re interested in finding the shortest path between any two actors by choosing a sequence of movies that connects them. For example, the shortest path between Jennifer Lawrence and Tom Hanks is 2: Jennifer Lawrence is connected to Kevin Bacon by both starring in “X-Men: First Class,” and Kevin Bacon is connected to Tom Hanks by both starring in “Apollo 13.”<br><br>
        We can frame this as a search problem: our states are people. Our actions are movies, which take us from one actor to another (it’s true that a movie could take us to multiple different actors, but that’s okay for this problem). Our initial state and goal state are defined by the two people we’re trying to connect. By using breadth-first search, we can find the shortest path from one actor to another.</h3>
    <a style='font-size:20px;padding-left:30px;color:rgb(245, 212, 63)'href='https://github.com/SihunHwang/CS50_AI/tree/project0_search/degrees'>
    >See the code</a><br><br>
    <a style='font-size:20px;padding-left:30px;color:rgb(245, 212, 63)'href='https://youtu.be/AnD83SFfYj4'>
    >Video demonstration of funcionality</a><br><br>
    <h2>Project: Tic-Tac-Toe</h2>
    <h3>Minimax</h3>
    <h3>An AI to play Tic-Tac-Toe optimally.
    <br>The part I worked on is tictactoe.py file.</h3>
    <a style='font-size:20px;padding-left:30px;color:rgb(245, 212, 63)'href='https://github.com/SihunHwang/CS50_AI/tree/project0_search/tictactoe'>
    >See the code</a><br><br>
    <a style='font-size:20px;padding-left:30px;color:rgb(245, 212, 63)'href='https://youtu.be/cajESvk5G1w'>
    >Video demonstration of funcionality</a><br><br>
</div>
</body>
</html>