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
            <h1 titre="help">Add new member </h1>
            @if(session()->has('message'))
            <div class="alert alert-success" style="text-align: center; color:white; background:green;">
                {{ session()->get('message') }}
            </div>
        @endif
            <form action="{{route('memAdd')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <i class="bi bi-person" ></i>
                    <label for=""> Name :</label>
                    <input type="text" placeholder="Your Name" name="name" required>
                </div>
               
                <div>
                <i class="bi bi-check2-square"></i>
                <Label> Position : </Label>
                    <select name="position" required>
                        @foreach ($positions as $position)
                           <option value="{{$position->id}}"> {{$position->name}}</option> 
                        @endforeach
                        
            
                    </select>
                </div>
                <div>
                    <i class="bi bi-person-bounding-box" style="color: white;"></i><label for="">Picture</label>
                    <input type="file" placeholder="" name="image" >

                </div>

                <div class="row">
                    <i class="bi bi-facebook" style="color: white;"></i>
                    <label for=""> Facebook :</label>
                    <input type="text" placeholder="Your link" name="facebook" required>
                </div>

                <div class="row">
                    <i class="bi bi-instagram" style="color: white;"></i>
                    <label for=""> Instagram :</label>
                    <input type="text" placeholder="Your link" name="instagram" >
                </div>

                <div class="row">
                    <i class="bi bi-linkedin" style="color: white;"></i>
                    <label for=""> Linkedin :</label>
                    <input type="text" placeholder="Your link" name="linkedin" >
                </div>

                <div class="row">
                    <i class="bi bi-twitter" style="color: white;"></i>
                    <label for=""> Twitter :</label>
                    <input type="text" placeholder="Your link" name="twitter" >
                </div>
                
                <div class="submit">
                    <input  type="submit" name="Submit" value="Add">
                </div>

            </form>
</body>
</html>