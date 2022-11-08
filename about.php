<!DOCTYPE html> 
<html> 
    <head> 
          
        <!-- CSS property to place div
            side by side -->
        <style> 
            #leftbox {
                float:left; 
                background:rgba(222,34,03,0.6);
                width:33.33%;
                height:300px;
            }
            #middlebox{
                float:left; 
                background:rgb(74, 100, 74);
                width:33.33%;
                height:300px;
            }
            #rightbox{
                float:right;
                background:rgb(74, 74, 109);
                width:33.33%;
                height:300px;
            }
            h1{
                color:rgb(231, 237, 231);
                text-align:center;
                text-shadow: 1px 1px 5px black, 0 0 25px blue, 0 0 5px darkblue, 2px 4px 5px red;
                font-size: 50px;
            }
            .team{
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .team{
                width: 150px;
                height: 150px;
                border-radius: 50%;
                align-items: center;
                text-align: center;

                
            }
            p{
                margin-left:5px;
                margin-right: 5px;
                text-align: justify;
                color: rgb(251, 254, 40);
                
            }
            b{
                color: rgb(52, 15, 15);
                font-size: 17px;
            }
	  .foot{
                position: fixed;
		left:40%;
		bottom:10px;
		color:white;    
		text-align:center;
            }
        </style> 
    </head> 
      
    <body bgcolor="#0099CC"> 
        <div id = "boxes">
            <h1>Team Member</h1>
              
            <div id = "leftbox">
               <h2><center>Abhishek Ratan</center></h2>
               
               <img src="images/av.png" alt="abhishek" class="team">
               <p>
                    One of the member who is involving in doing <b>Database</b> , <B>Backend </B> work.
            </p>
            
            </div> 
              
            <div id = "middlebox">
                <h2><center>Haidar Naqui</center></h2>
                <img src="images/hd.png" alt="haidar" class="team">
                <p>
                    One of the member who is passionate about logical think and he is involving in doing <b>Database</b> and <b>Backend work.</b>
                <p>
               
             </p>
            </div>
              
            <div id = "rightbox">
                <h2><center>Akash Anand</center></h2>
                <img src="images/ak.png" alt="akash" class="team">
                <p>
                    One of the member who is passionate about designing and he is involving in doing <b>Frontend </b>work.
                <p>
               
               
            </div>
        </div>
	<footer class="foot">
	<div>Copyright &copy; 2022. All Rights Reserved. </div>
	</footer>
</div>
    </body> 
</html>                                      