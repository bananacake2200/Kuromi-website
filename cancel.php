<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Cancel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>


</head>

<style>
    :root{
        --main-color: gray;
        --text-color: rgb(143, 95, 182);
        --bg-color: rgb(15, 15, 15);
        --container-color:url(pastel.jpg);
    }

    .sc-container{
        width:100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    
    }
    .sc-container img{
        width: 200px;
        margin: 2rem 0;
        border: 2px solid;
        border-radius: 100%;
    }
    .sc-container h1{
        font-size: 2.8rem;
        margin-bottom: 10px;
    }
    .sc-container p{
        max-width: 600px;
        font-size: 1.4rem;
        text-align: center;
        margin: 0.5rem 0;
    }
    .sc-btn{
        padding: 12px 20px;
        border: 2px solid;
        border-radius: 2rem;
        background-color: var(--text-color);
        color: var(--bg-color);
        font-size: 1rem;
        font-weight: 500;
    }
    /*making resdponsive*/
    @media (max-width:1080px){
        .nav {
    padding: 20px 0;
}
section{
    padding: 3rem 0 2rem;
}
.container{
    margin: 0 auto;
    width: 90%;
}
    }


</style>
<body>
<div class="sc-container">
    <h1>Something Went wrong!</h1>
    <p> We apologize for the inconvenience, but an error occured while processing your order request </p>
    <p> For Any Support Email: support@company.com</p>
    <img src="img/cancel.png" alt=""/>
    <a href="krukru.html" class="sc-btn">Back to Homepage</a>   
</div>
</body>
</html>