<!DOCTYPE html>
<html>
<head>
    <title> Timeline Page </title>
</head>
<style type="text/css">

#blue_bar{
    height: 50px;
    background-color : #232323;
    color: #fafbfd;

}
#search_box{
    width : 400px;
    height : 20px;
    border-radius: 5px;
    border: none;
    padding: 4px;
    font-size: 14px;
    background-image: url(images/search.png);
    background-repeat: no-repeat;
    background-position: right;
}

#profile_pic{

    width: 150px;
    border-radius : 50%;
    border: solid 2px white;
}

#menu_buttons{

    width: 100px;
    display: inline-block;
    margin: 2px;

}

#friends_img{

    width:75px;
    float: left;
    margin: 8px;
}

#friends_bar{

    min-height: 400px;
    margin-top: 20px;
    padding: 8px;
    text-align: center;
    font-size: 20px;
    color: #ffffff;
}

#friends{
    
    clear: both;
    font-size: 12px;
    font-weight: bold;
    color: #232323; 
}

textarea{

    width: 100%;
    border: none;
    font-family: tahoma;
    font-size : 14px;
    height: 60px;
}

#post_button{

    float: right;
    background-color: #232323;
    border: none;
    color: white;
    padding: 4px;
    font-size: 14px;
    border-radius: 2px;
    width: 50px;
}

#post_bar{

    margin-top: 20px;
    background-color:white;
    padding: 10px;
}

#post{

    padding: 4px;
    font-size: 13px;
    display: flex;
    margin: 20px;
}

</style>
<body style="font-family: tahoma; background-color: #4c4c4c; ">

    <br>
    <!--top bar-->
    <div id="blue_bar"> 
        <div style="width:800px; margin:auto; font-size:30px;">
            My Account &nbsp &nbsp<input type ="text" id="search_box" placeholder="Search for Partners" >
        </div>
    
    </div>
    <!--cover area-->
    

        <!--below cover area-->
        <div style="display: flex;">

            <!--friends area-->
            <div style="min-height: 400px;flex:1;">

                <div id="friends_bar">
                     <img src="images/selfie.png" id="profile_pic">
                     Itachi Uchiha 
                </div>

            </div>


            <!--posts area--> 
            <div style="min-height: 400px;flex:2.5;padding: 20px; padding-right:0px;">

                <div style="border:solid thin #aaa; padding: 10px;background-color: white;">
                    <textarea placeholder="What's on your mind?"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                </div>

                <!--posts-->
                <div id="post_bar">
                    
                    <!--post1-->
                    <div id="post">
                        <div>
                            <img src="images/user1.jpg" style="width: 75px;margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;color: #232323" >Naruto Uzumaki</div>
                            I love sasuke.I love sasuke.I love sasuke.I love sasuke.I love sasuke.
                            I love sasuke.I love sasuke.I love sasuke.I love sasuke.I love sasuke.
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">Dec 06 2020</span>  
                        </div>
                    </div>

                    <!--post2-->
                    <div id="post">
                        <div>
                            <img src="images/user4.jpg" style="width: 75px;margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;color: #232323" >Kisame Hoshigake</div>
                            I love Might Guy.I love Might Guy.I love sasuke.I love sasuke.I love sasuke.
                            I love Might Guy.I love Might Guy.I love sasuke.I love sasuke.I love sasuke.
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">Dec 07 2020</span>  
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
</html>
