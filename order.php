
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>place an order</title>
    <link rel="stylesheet" href="order.css">
    
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        body{
            background-image:url(cake_background.jpg);
            background-color:aquamarine;
            background-position:center;
            background-size:cover;
            font-family:sans-serif;
            margin-top:40px;
        }
        .regform{
            width:800px;
            margin:auto;
            color:orangered;
            padding:10px 0px 10px 0px;
            text-align:center;
            border-radius:15px 15px 0px 0px;
        }
        
        .container{
            background-color:rgb(0,0,0,0.5);
            width:800px;
            margin:auto;
        }
        form{
            padding:10px;
        }
        #name{
            width:100%;
            height:35px;
        }
        .name{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            color:orangered;
            font-size:18px;
            font-weight:700;
        }
        .firstname{
            position:relative;
            left:20px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
        }
        .lastname{
            position:relative;
            left:20px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
            color:#555;
        }
        .firstlabel{
            position:relative;
            color:white;
            text-transform:capitalise;
            font-size:14px;
            left:92px;
            top:-66px;
        }
        .lastlabel{
            position:relative;
            color:white;
            text-transform:capitalise;
            font-size:14px;
            left:92px;
            top:-66px;
        }
        .email{
            position:relative;
            left:93px;
            top:-37px;
            line-height:40px;
            width:480px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
            color:orangered;
        }
        p{
    color: orangered;
    margin: 0 auto;
    text-align: left;
    padding: 20px 0;
    max-width: 500px;
    font-size: 19px;
}
.active{
    background-color: orangered;
    color: white;
    box-shadow: 5px 10px 30px rgba(252,59, 0, 0.397);
    border-radius: 5px;
}
a{
    text-decoration: none;
}
ul{
    list-style: none;
}
div ul{
    display: flex;
    align-items: center;
    
}
div ul li{
    height: 40px;
    line-height: 43px;
    margin: 3px;
    padding: 0 22px;
    display: flex;
    font-size: 0.7rem;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 3px;
    transition-timing-function: 0.6s ease-in-out;
    color: black;
}
div ul li a:hover{
    background-color: orangered;
    color: white;
    box-shadow: 5px 10px 30px rgba(252,59, 0, 0.397);
    border-radius: 5px;
}
.code{
    position:relative;
    left:13px;
    top:-37px;
    line-height:40px;
    width:80px;
    border-radius:6px;
    padding:0 22px;
    font-size:16px;
    color:orangered;
}
.number{
    position:relative;
    left:53px;
    top:-37px;
    line-height:40px;
    width:250px;
    border-radius:6px;
    padding:0 22px;
    font-size:16px;
    color:orangered;
}
.Phone{
    color:orangered;
    padding:10px;
    padding:0 22px;
}
.area_code{
    position:relative;
    color:white;
    text-transform:capitalise;
    font-size:16px;
    left:94px;
    top:-4px;
}
.phone-number{
    position:relative;
    color:white;
    text-transform:capitalise;
    font-size:16px;
    left:165px;
    top:-4px;
}
.order{
    color:orangered;
    padding:10px;
    padding:0 22px;
}
.place_order{
    position:relative;
    color:white;
    text-transform:capitalise;
    font-size:30px;
    left:94px;
    top:-20px;
    border-radius:6px;

}
.submit_btn{
    color:orangered;
    border-radius:6px;
    padding: 16px 32px;
    margin: 4px 2px;
    position:relative;
    left:340px;
    cursor:pointer;
}

    
    </style>
</head>
<body>
    <div class="regform"><h2>Hillana Bakery Order Form</h2>
    
    </div>
    <div class="navigation">
        <ul>
        <li><a href="index.php" class="active">Home</a></li>
            <li><a href="#" >About us</a></li>
            <li><a href="contact.php">contact us</a></li>
            <li><a href="bakery_menu.php">Menu</a></li>
            <li><a href="#">Today's special</a></li>

        </ul>
    </div>
    <div class="container">
        <form action="connect.php" method="post">
        <div id="name">
            <h3 class="name">Name</h3>
            <label class="firstlabel">First name</label>
            <input class="firstname" type="text" name="firstName">
            <label class="lastlabel">Last name</label>
            <input class="lastname" type="text" name="lastName">
            
        </div>

            <h3 class="name">Email</h3>
            <input class="email" type="email" name="email">

            <h3 class="Phone">Phone</h3>
            <label class="area_code">Area Code</label>
            <input class="code" type="text" name="areaCode">
            <label class="phone-number">Phone Number</label>
            <input class="number" type="text" name="phone">
            

            <h3 class="order">Order</h3>
            <input class="place_order" type="text" name="Order"> <br>

            
            <input class="submit_btn" type="submit" value="Send">
            
        </form>
    </div>
</body>
</html>