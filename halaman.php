<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal 3</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image:url(img/background.jpeg);
    background-size: cover;
    background-position: center;
}
.navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 120px;
    cursor: pointer;
    
}
.navbar ul li {
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}

.navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}

.navbar ul li:hover::after{
    width: 100%;

}
.content{
     width: 100%;
     position: absolute;
     top: 50%;
     transform: translateY(-50%);
     text-align: center;
     color: #fff;
}
.content h1{
    font-size: 70px;
    margin-top: 25px;
}
.content p {
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}
button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
span{
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span{
    width: 100%;
}
button:hover{
    border: none;
}

    </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
           <img src="img/logo.png" alt="logo" height="75px" width="200px">
            <ul>
                <li><a href="#" class="active">About</a></li>
                <li><a href="https://personalweboktaharis.netlify.app/">Portofolio</a></li>
	        	<li><a href="#"> Contact</a></li>
            </ul>
            <div class="content">
                <h2>YOKOSO</h2>
            <div>
                <a href="login.php">
                <button type="button"><span></span>register</button></a>
                <a href="http://oktaharis12.infinityfreeapp.com">
                <button type="button"><span></span>Masjid Wikrama</button></a>
            </div>

            
        </div>
    

    </div>
    
</body>
</html>