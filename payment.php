<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <style>

        
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .1s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background-image: url(img/omg.png);
  background-size: cover;
  background-repeat: repeat;
}

.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  border: 1px solid black;
  border-radius: 10px;
  padding-bottom: 40px;
  
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:35px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#070707;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
  font-weight: 700;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #0f0f0f;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
  font-weight: 500;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
  border-radius: 20px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.btn-pay1{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background:rgb(143, 95, 182);
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
  border-radius: 5px;
  text-decoration: none;
  border: 1px solid black;
}
.btn-pay2{
  width: 100%;
  padding:12px;
  
  font-size: 17px;
  background:rgb(143, 95, 182);
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
  border-radius: 5px;
  text-decoration: none;
  border: 1px solid black;
}

.btn-pay1:hover{
  background: rgba(143, 95, 182, 0.849);
  color: #000;
}
.btn-pay2:hover{
    background: rgba(143, 95, 182, 0.849);
  color: #000;
}
</style>
</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">My billing Information</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" >
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text">
                    </div>
                </div>
                <br>
                <button type="button" class="btn-pay1" onclick="btnClose('successful.php')" name="btn-payy" id="btn-payy"><i class="fa fa-check" aria-hidden="true"></i> | Place order</button>
                    


            </div>

            <div class="col">

                <h3 class="title">payment method</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text">
                    </div>
                </div>
                <br>
                <button type="button" class="btn-pay2" onclick="btnClose('product.php')" id="btn-pay"><i class="fa fa-history" aria-hidden="true"></i> | Back</button>


            </div>
    
        </div>

    </form>

</div>    
<script src="js/main.js"></script>
</body>
</html>