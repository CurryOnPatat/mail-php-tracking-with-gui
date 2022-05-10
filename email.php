    <html>
<link rel="stylesheet" href="style.css">
<title> email gen linkie </title>

<body>
    <style>

        </style>
<div class="container column">
<h1> your link that you need to put in the email is: 
<?php echo htmlspecialchars('<img src="https://yoururlgoeshere/footer.php?image=footer.gif&id="'.$_GET["email"].'">'); ?>
</h1>
</div>



</body>
</html>