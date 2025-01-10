<!DOCTYPE html>
<html>
<head>
    <title>Wattpad Style</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
     <style>body {
    font-family: sans-serif;
    background-color: #f0f0f0;
}

#container {
    width: 800px; /* Adjust width as needed */
    margin: 50px auto; /* Center horizontally */
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

input{
    font-size: 24px;
    margin-bottom: 20px;
    border: none;
}

textarea {
    width: 100%;
    height: 300px; /* Adjust height as needed */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    resize: vertical; /* Allow vertical resizing */
}

    .header {
        width: 100%;
        height: 80px;
        background-color: red;
    }
    .header-list  {
        display: flex;
        
        justify-content: end;

       
    }

    .header-list  a {
        margin-top: 10px;
        text-decoration: none;
        color: black;
        margin-right: 100px;
    }
</style>
</head>
<body>
        <div class="header">
            <div class="back"><a href="">back</a></div>
            <div class="header-list">
                <a href="">Publish</a>
                <a href="">save</a>
            </div>
        </div>
    <div id="container">
       <form action="">
       <input type="text" placeholder="Untitled Part 1">
       <textarea placeholder="Type your text here"></textarea>
       </form>
    </div>

</body>
</html>