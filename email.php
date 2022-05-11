    <html>
<link rel="stylesheet" href="style.css">
<title> Email link genrator </title>

<body>
    <style>

        </style>
<div class="container column">
<h1> your link that you need to put in the email is: 
</h1>
<h2><?php echo htmlspecialchars('<img src="https://yoururlgoeshere/footer.php?image=footer.gif&id='.$_GET["email"].'" >'); ?></h2>
</div>



</body>
</html>