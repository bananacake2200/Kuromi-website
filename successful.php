<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful Payment</title>
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
    body{
            background-size: contain;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-color: white;

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
        font-size: 4rem;
        margin-bottom: 10px;
    }
    .sc-container p{
        max-width: 600px;
        font-size: 2rem;
        text-align: center;
        margin: 0.5rem 0;
    }
    .sc-btn{
        width:20%;
        padding: 10px;
        padding-left: 25px;
        padding-right: 25px;
        border: 2px solid;
        border-radius: 2rem;
        background-color: var(--text-color);
        color: var(--bg-color);
        font-size: 1rem;
        font-weight: 500;
        text-decoration: none;
        font-size: 1.5rem;
        text-align: center;
    }
    .sc-btn:hover{
        background: rgba(143, 95, 182, 0.849);
  color: #000;
    }


</style>
<body>
<div class="sc-container">
    <h1>Order Successful!</h1>
    <p> Your order will arrive at 2-3 days.</p>
    <img src="img/successful.jpg" alt=""/>
    <button type="button" class="sc-btn" onclick="redirect()" id="btn-sc"> Back to Products</button>

</div>
<script>
    function redirect() {
        // Customize the URL based on your requirements
        window.location.href = 'products.php';
    }
</script>
</body>
</html>