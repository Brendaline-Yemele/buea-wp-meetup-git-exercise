<!DOCTYPE html>
<html>
    <head>
        <tittle></tittle>
        <style>
nav{border: 2px solid auto;
    margin-top: 50px;
    background: #2c4da7;
    color: white;
    display:flex;
    justify-content: space-between;
    align-items: center;
}
span {
    
gap:25px;
}

.Name{     
color: white;
    background:linear-gradient(120deg,#2c4da7,#6b8cff);
     display:flex;
    justify-content: space-between;
    align-items: center;
}

.Name img{
    
width:180px;
height:180px;
border-radius:50%;
border:6px solid white;
}
 
button {
    background-color: #90EE90;
    border: none;
    border-radius: 5px;
    padding: 10px;
    margin-left: 6px;
    padding-left: 20px;
      padding-right: 20px;
}
            </style>
            </head>
            <body>
            
                <nav>
                <h2 style="color: white;"> KETUANZE EMMASHA NEMBUANYI </h2>
                <ul>
                    <span> Home</span>
                    <span>About </span>
</nav>

<div class="Name">
<div>
<h1 style="color: white;"> Hi, i'm Emmasha</h1>
<p>Aspiring Software Engineer</p>
<p>
I'm a passionate software engineering student at the University of Buea
focusing on web development and plugin creation.
</p>
<button>Contact</button>
</div>
<img src="<?php echo plugin_dir_url(__FILE__); ?>images/jeff.png" alt="Kent Image" >
</div>