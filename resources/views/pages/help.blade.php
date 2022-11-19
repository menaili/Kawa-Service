<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <style>
        body{
            height: 100vh;
            background-color: #081853;
            color: white;
        }
        h1 ,p{
            text-align:center;
            padding: 10px;
        }
        p{ 
            font-size: 18px;
        }
        form{
            width: 500px;
            margin: auto;
            
        }
        input, select{
            height: 25px;
            width: 65%;
            margin: 15px;
            background-color: white;
            border: none;
            border-radius: 7px;
            padding: 3px
        }
        textarea{
            width: 90%;
            margin: 15px;
            border-radius: 7px;
            padding: 7px;
            font-size:17px
        }
        i{
            font-size: 20px;
            margin: 10px
        }
        .submit{
           
            text-align:center;
        }
        .submit input{
            border: none;
            background: linear-gradient( #d94a7f,#b15294);
            color: white;
            font-size: 20px;
            height: 40px;
        }
        @media screen and (max-width:1024px) {
            input{
                display: block;
                width:85%;
                margin:auto;
                margin-top:7px;
                margin-bottom: 7px;
            }
            select{
                display: block;
                width:85%;
                margin:auto;
                margin-top:7px;
                margin-bottom: 7px;
                height: 30px;
            }
            textarea{
                width:85%; 
            }
            .submit{
                text-align: center;
            }
        }
    </style>
</head>
<body>
            <h1 titre="help">How can we help you? </h1>
            <p>Drop us a line and we will get back to you as soon as possible, usually within 24 hours.</p>
            <form >
                <div class="row">
                    <i class="bi bi-person" ></i>
                    <label for=""> Name :</label>
                    <input type="text" placeholder="Your Name" name="name" required>
                </div>
                <div>
                    <i class="bi bi-envelope"></i>
                    <Label>Email : </Label>
                    <input type="email" placeholder="Your Email" name="email" required>
                </div>
                <div>
                <i class="bi bi-check2-square"></i>
                <Label> Choose Topic : </Label>
                    <select name="" required>
                        <option value=""> Bug report</option>
                        <option value="">Functionality request</option>
                        <option value="">"How to" question</option>
                        <option value="">Payments</option>
                        <option value="">Other</option>
                    </select>
                </div>
                <div>
                <i class="bi bi-chat-right-dots"></i><label for="">Message</label>
                </div>
                <div>
                    
                    
                    <textarea name="msg" id="" cols="30" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="submit">
                    <input  type="submit" name="Submit" value="Send">
                </div>

            </form>
</body>
</html>