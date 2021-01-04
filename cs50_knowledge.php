<!DOCTYPE html>
<html>
<head>
    <link href='./style.css' rel='stylesheet'>
    <!--<script scr='active_menu.js'></script>-->
    <title>cs50 knowledge</title>
</head>
<body>
<?php include 'sidebar.php'?>
<div class='main'>
    <h1>knowledge<br><br></h1>
    <h3>Learnt how to represent knowledge in computer and make inferences from the knowledge.<br><br><br></h3>
    <h2>Project: Knights</h2>
    <h3>Program to solve logic puzzles. The part I worked on is puzzle.py file.<br><br>
        In 1978, logician Raymond Smullyan published “What is the name of this book?”, a book of logical puzzles. Among the puzzles in the book were a class of puzzles that Smullyan called “Knights and Knaves” puzzles.
        <br><br>
        In a Knights and Knaves puzzle, the following information is given: Each character is either a knight or a knave. A knight will always tell the truth: if knight states a sentence, then that sentence is true. Conversely, a knave will always lie: if a knave states a sentence, then that sentence is false.
        <br><br>
        The objective of the puzzle is, given a set of sentences spoken by each of the characters, determine, for each character, whether that character is a knight or a knave.
        <br><br>
        For example, consider a simple puzzle with just a single character named A. A says “I am both a knight and a knave.”
        <br><br>
        Logically, we might reason that if A were a knight, then that sentence would have to be true. But we know that the sentence cannot possibly be true, because A cannot be both a knight and a knave – we know that each character is either a knight or a knave, but not both. So, we could conclude, A must be a knave.
        <br><br>
        That puzzle was on the simpler side. With more characters and more sentences, the puzzles can get trickier! Your task in this problem is to determine how to represent these puzzles using propositional logic, such that an AI running a model-checking algorithm could solve these puzzles for us.</h3>
    <a style='font-size:20px;padding-left:30px;color:rgb(245, 212, 63)'href='https://github.com/SihunHwang/CS50_AI/tree/project1_knowledge/knights'>
    >See the code</a><br><br>
    <a style='font-size:20px;padding-left:30px;color:rgb(245, 212, 63)'href='https://youtu.be/dfe45wS_DZk'>
    >Video demonstration of funcionality</a><br><br>

</div>
</body>
</html>