<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack</title>
</head>
<style>
    *{
        margin:0;
        padding:0;

    }
   
    .container{
        background: url("https://cdn.pixabay.com/photo/2017/07/15/22/07/library-2507902_960_720.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 0.8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 96vh;
        flex-direction: column;
    }
    div input,textarea {
        width: 40vw;
        margin: 15px 0px;
        padding: 13px 4px;
        border: 2px solid black;
        border-radius: 7px;
        font-size: 13px;
    
    }
    .btndiv{
        display: flex;
        justify-content: center;
    }
    .btn{
        font-size: 20px;
        padding: 4px 4px;
        border: 2px solid black;
        border-radius: 8px;
        cursor: pointer;
    }
</style>
<body>
<div class="container">
    <h1>Feed Back Form</h1>
    <form action="dj.php" method="POST">
        <div><input type="Text" name="Name" placeholder="Name"></div>
        <div><input type="Email" name="Email" placeholder="Email"></div>
        <div><input type="text" name="Phone" placeholder="Number"></div>
        <div><input type="text" name="Address" placeholder="Address"></div>
        <div><textarea name="Description"  cols="10" rows="10" placeholder="Description"></textarea></div>
        <div class="btndiv"><button class="btn" name="Submit">Submit</button></div>
    </form>


</div>
    

</body>

</html>