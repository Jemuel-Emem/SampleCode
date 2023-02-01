<!DOCTYPE html>
<html lang="en">
<head>

    <style>
body{
    background-color: rgb(232, 253, 255);

}
.header-left{
    display: flex;
    padding: 5px;
    margin: 5px;

}
.header-left > div{
    color: white;
    border: 2px solid white;
    height: 50px;
    position: absolute;
    top: 40px;
    background-color: rgb(27, 146, 142);
    display: flex;
    justify-content: center;
    text-align: justify;

}


.header-left > h1{
    color:rgb(61, 14, 61);
    font-family: arial;
    position: absolute;
    left: 70px;
    top: 20px;
}
.header-left > p{
    position: absolute;
    color: rgb(27, 146, 142)    ;
    top: 60px;
    left: 70px;

}

.header-right{
    display: flex;
    padding: 5px;
    margin: 5px;
    justify-content: flex-end;

}
.header-right > #photo{
    color: white;
    border: 2px solid white;
    border-radius: 20px;
    height: 30px;
    background-color: rgb(27, 146, 142);
    position: absolute;
    top: 50px;
    right: 200px;
}

.header-right > h2{
    font-size: 10px;
    position: absolute;
    right: 140px;
    top: 45px;
    color:  rgb(61, 41, 61);
    font-family: arial;

}
.header-right > p{
    position: absolute;
    color: rgb(27, 146, 142);
    font-size: 11px;
    right: 140px;
    top:55px;
}
.logout{
    position: absolute;
    right: 60px;
    top:55px;
    font-display: none;
    font-family: arial;

}

.search{
    display: inline;
    justify-content: flex-start;
    width: 1430PX;
    height: 40px;
    position: absolute;
    top: 60px;
    left: 17px;


}

.search > input{
    border: 2px solid  rgb(27, 146, 142);
    font-size: 20px;
    font-family: arial;
}

input:focus{
    outline: none;
    box-shadow: 0px 0px 5px rgb(27, 146, 142);/*here change the color*/
    border:2px solid rgb(27, 146, 142);/*here change the color*/

}
.data{
    position: absolute;
    width: 96%;
    height: 75%;
    justify-content: flex-start;
    top: 150px;
    left:15px;
}

.main-nav{
    border: 2px solid rgb(27, 146, 142);
    margin: 20px;
    justify-content: flex-start;
    background-color: rgb(27, 146, 142);
    position: relative;
    top: 5px;
}

.data-info{
    border: 2px solid rgb(61, 41, 61);
    margin: 20px;
    position: relative;
    top: -20px;
    justify-content: flex-start;
    background-color:rgb(61, 41, 61);
}

.data-info-1{
    border: 2px solid rgb(61, 41, 61);
    margin: 20px;
    position: relative;
    top: -40px;
    justify-content: flex-start;
    background-color:rgb(61, 41, 61);
    border-top: 1px solid white;
}
.data-info-2{
    border: 2px solid rgb(61, 41, 61);
    margin: 20px;
    position: relative;
    top: -60px;
    justify-content: flex-start;
    background-color:rgb(61, 41, 61);
    border-top: 1px solid white;
}

.data-info-3{
    border: 2px solid rgb(61, 41, 61);
    margin: 20px;
    position: relative;
    top: -80px;
    justify-content: flex-start;
    background-color:rgb(61, 41, 61);
    border-top: 1px solid white;
}

.data-info-4{
    border: 2px solid rgb(61, 41, 61);
    margin: 20px;
    position: relative;
    top: -100px;
    justify-content: flex-start;
    background-color:rgb(61, 41, 61);
    border-top: 1px solid white;
}

.data-info-5{
    border: 2px solid rgb(61, 41, 61);
    margin: 20px;
    position: relative;
    top: -120px;
    justify-content: flex-start;
    background-color:rgb(61, 41, 61);
    border-top: 1px solid white;
}

.data-info-6{
    border: 2px solid rgb(61, 41, 61);
    margin: 20px;
    position: relative;
    top: -140px;
    justify-content: flex-start;
    background-color:rgb(61, 41, 61);
    border-top: 1px solid white;
}



ul{
    list-style: none;
    justify-content: space-evenly;
    display: flex;
    flex-direction: row;
    padding: 5px;
    margin: 15px;
    font-family: arial;
    color: wheat;
text-indent: -20px;
}

li:hover{
    color: aqua;

}

#name{

    position: relative;
    left: -80px;
}
#action{
    position: relative;
    right: -85px;
}
#kapoy{
    position: relative;

}
#aray{
    position: relative;
    left: -50px;
}

#none{
    color: red;
    position: relative;
    left: -40px;
    background-color: rgb(232, 253, 255);
    padding: 5px;
    margin: 5px;
    border-radius: 5px;
    font-size: 15px;

}

#none-1{
    right: -50px;
    position: relative;
}

#none:focus{
    outline: none;
}
#none:hover{
    color: white;
    padding: 10px;
    background-color: rgb(108, 229, 225);

}

</style>
</head>
<body>
   <div class="main">
<div class="header-left">
    <div class="logo">LOGO</div>
    <h1 class="logo-name"> DARBC</h1>
    <p class="land-m"> Land Management</p>

</div>

<div class="header-right">
    <div id="photo">-------</div>
    <h2 class="name"> MOGYAHID</h2>
    <p class="land-admin"> Land Admin</p>

<div class="logout">LOGOUT</div>

<div class="search">
    <input type="text" placeholder="search...." class="search">
</div>

<div class="data">
<div class="main-nav">
    <ul>
        <li><a id="name"> NAME  </a> </li>
        <li><a id="kapoy"> BLOCK  </a> </li>
        <li><a id="kapoy"> LOT  </a> </li>
        <li><a id="kapoy"> AREA  </a> </li>
        <li><a id="kapoy"> STATUS  </a> </li>
        <li><a id="kapoy"> BUYER  </a> </li>
        <li><a id="action"> DATE SOLD </a> </li>
        <li><a id="action"> DRAW DATE </a> </li>
        <li><a id="action"> ACTIONS </a> </li>
    </ul>
</div>


<div class="data-info">
    <ul>
<li><a id="name"> Jemuel Agnes </a> </li>
<li><a id="aray"> 2  </a> </li>
<li><a id="aray"> 10 </a> </li>
<li><a id="aray"> Village 11 </a> </li>
<li><a id="aray"> Unsold</a> </li>
<li><a id="none"> None </a> </li>
<li><a id="none-1"> None</a> </li>
<li><a id="action"> October 10 2021</a> </li>
<li><a id="action"> None </a> </li>
    </ul>
</div>

<div class="data-info-1">
    <ul>
<li><a id="name"> Kristene Ampa </a> </li>
<li><a id="aray"> 2  </a> </li>
<li><a id="aray"> 10 </a> </li>
<li><a id="aray"> Village 11 </a> </li>
<li><a id="aray"> Unsold</a> </li>
<li><a id="none"> None </a> </li>
<li><a id="none-1"> None</a> </li>
<li><a id="action"> October 10 2021</a> </li>
<li><a id="action"> None </a> </li>
    </ul>
</div>

<div class="data-info-2">
    <ul>
<li><a id="name"> Kristene Ampa </a> </li>
<li><a id="aray"> 2  </a> </li>
<li><a id="aray"> 10 </a> </li>
<li><a id="aray"> Village 11 </a> </li>
<li><a id="aray"> Unsold</a> </li>
<li><a id="none"> None </a> </li>
<li><a id="none-1"> None</a> </li>
<li><a id="action"> October 10 2021</a> </li>
<li><a id="action"> None </a> </li>
    </ul>
</div>

<div class="data-info-3">
    <ul>
<li><a id="name"> Kristene Ampa </a> </li>
<li><a id="aray"> 2  </a> </li>
<li><a id="aray"> 10 </a> </li>
<li><a id="aray"> Village 11 </a> </li>
<li><a id="aray"> Unsold</a> </li>
<li><a id="none"> None </a> </li>
<li><a id="none-1"> None</a> </li>
<li><a id="action"> October 10 2021</a> </li>
<li><a id="action"> None </a> </li>
    </ul>
</div>

<div class="data-info-4">
    <ul>
<li><a id="name"> Kristene Ampa </a> </li>
<li><a id="aray"> 2  </a> </li>
<li><a id="aray"> 10 </a> </li>
<li><a id="aray"> Village 11 </a> </li>
<li><a id="aray"> Unsold</a> </li>
<li><a id="none"> None </a> </li>
<li><a id="none-1"> None</a> </li>
<li><a id="action"> October 10 2021</a> </li>
<li><a id="action"> None </a> </li>
    </ul>
</div>

<div class="data-info-5">
    <ul>
<li><a id="name"> Kristene Ampa </a> </li>
<li><a id="aray"> 2  </a> </li>
<li><a id="aray"> 10 </a> </li>
<li><a id="aray"> Village 11 </a> </li>
<li><a id="aray"> Unsold</a> </li>
<li><a id="none"> None </a> </li>
<li><a id="none-1"> None</a> </li>
<li><a id="action"> October 10 2021</a> </li>
<li><a id="action"> None </a> </li>
    </ul>
</div>

<div class="data-info-6">
    <ul>
<li><a id="name"> Kristene Ampa </a> </li>
<li><a id="aray"> 2  </a> </li>
<li><a id="aray"> 10 </a> </li>
<li><a id="aray"> Village 11 </a> </li>
<li><a id="aray"> Unsold</a> </li>
<li><a id="none"> None </a> </li>
<li><a id="none-1"> None</a> </li>
<li><a id="action"> October 10 2021</a> </li>
<li><a id="action"> None </a> </li>
    </ul>
</div>


</div>

</div>

   </div>
</body>
</html>
