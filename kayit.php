<?php
    if($_POST["student-no"] == "b231210023" && $_POST["password"] == "b231210023") {
        echo "
        <html>
        <head>
            <style>
            
            .success-message {
                background-color: #dff0d8;
                border: 1px solid #d6e9c6;
                color: #4CAF50;
                padding: 15px;
                margin: 20px auto;
                max-width: 400px;
                border-radius: 5px;
            }
            
            .success-message h2 {
                font-size: 24px;
                margin-top: 0;
            }
            
            .success-message p {
                font-size: 18px;
                margin-bottom: 0;
            }</style>
        </head>
        <body>
        <div class = 'success-message'>

             <h3>b231210023 Hoşgeldiniz</h3> 
        </div>
        </body>
        </html>";
        header("refresh:2;url=Anasayfa.html");
        exit();
    }
?>