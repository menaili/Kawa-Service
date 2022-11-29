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

        .multiselect {
            width: 200px;
          }
          
          .selectBox {
            position: relative;
          }
          
          .selectBox select {
            width: 100%;
            font-weight: bold;
          }
          
          .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
          }
          
          #checkboxes {
            display: none;
            border: 1px #dadada solid;
          }
          
          #checkboxes label {
            display: block;
          }
          
          #checkboxes label:hover {
            background-color: #1e90ff;
          }
    </style>
</head>
<body>
            <h1 titre="help">Edit Project </h1>
            {{-- <p>Drop us a line and we will get back to you as soon as possible, usually within 24 hours.</p> --}}
            <form action="{{route('Projects.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                
                    
                <div class="row">
                    <i class="bi bi-browser-edge" style="color: white;"></i>
                    <label for="">Project Name :</label>
                    <input type="text" value="{{$edit->name}}" name="name" required>
                </div>

                <div class="row">
                    <i class="bi bi-card-text" style="color: white;"></i>
                    <label for="">Project Description :</label>
                    <textarea id="w3review" placeholder="Description" name="description" required rows="4" cols="50">{{$edit->description}}</textarea>
                </div>
               
                <div>
                    <i class="bi bi-person-bounding-box" style="color: white;"></i><label for="">Project Picture</label><br>
                    <input type="file" placeholder="" name="pic" required>

                </div>
               

                <div class="multiselect">
                    <i class="bi bi-person" style="color: white;"></i>
                    <Label> Members : </Label>
                    <div class="selectBox" onclick="showCheckboxes()">
                      <select>
                        <option>Select team</option>
                      </select>
                      <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes">
                      <label for="one">
                        @foreach ($members as $member)
                        <input type="checkbox" name="check[]" id="one" value="{{$member->id}}" />{{$member->name}}</label>
                        @endforeach
                      
                    </div>
                  </div>

                <div>
                    <i class="bi bi-person-bounding-box" style="color: white;"></i><label for="">Picture</label><br>
                    <input type="file" placeholder="" name="images[]" multiple="multiple">

                </div>

                <div class="row">
                    <i class="bi bi-link-45deg" style="color: white;"></i>
                    <label for=""> Url of project :</label>
                    <input type="text" value="{{$edit->URL}}" name="link" required>
                </div>

                

                
                <div class="submit">
                    <input  type="submit" name="Submit" value="Update">
                </div>

            </form>

            <script>
                var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
            </script>
</body>
</html>