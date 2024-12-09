<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="atull.php"></a>
    <title>Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 25px;
        }
        body{
           background-color:  rgba(255, 144, 40, 0.637);
        }
        .container::after{
            content: "";
            background-image: url('');
            opacity:0.7;
            /* z-index: -1; */

        }
        .container{
            z-index: 1;
            width: 40vw;
            margin:4rem auto 0rem;
            /* text-align: center; */
            border: none;
            box-shadow: 0rem 0rem 0.4rem 0.3rem rgba(0, 0, 0, 0.199);
            background-color: white;

        }
        .form{
            margin: 0.2rem auto;
            width: 90%;
            line-height: 1.7rem;
        }
        .container > h2{
            font-size: 1.5rem;
            text-align: center;
            margin: 0.2rem 0rem;
        }
        /* .input{
        } */
        #Name{
            text-align: center;
            font-size: 0.8rem;
            width: 5rem;
            border: none;          
        }

        .container > h3{
            text-align: center;
            font-size: 1.2rem;
            margin: 0rem 0rem 0.2rem;
        }
        select{
            /* height: 1.2rem; */
            font-size: 0.8rem;
            width: fit-content;
        }
        option{
            /* height: 1.2rem; */
            font-size: 0.8rem;
        }
        label{
            font-size: 1.2rem;
        }
        input[type='date']
        {
            height: 1.2rem;
            font-size: 0.8rem;
        }
        input[type='file']
        {
            font-size: 0.6rem;
        }
        .radio
        {
            font-size: 0.9rem;
        }
        button{
            width:30%;
            height: 1.5rem;
            border: none;
            color:black;
            background-color: rgba(255, 144, 40, 0.637);
            border-radius: 3rem;
            /* font-weight: bold; */
            text-shadow: 1px 1px white;
            margin: 0.7rem 1.2rem
        }
        button:hover{
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form using PHP and JS</h2>
        <h3>Enter Your Details</h3>
        <div class="form">

            <form action="atull.php" name="form" method="post" enctype="multipart/form-data">
                <label for="Name"> Name:- 
                    <input type="text" id="Name" class="input" name="FirstName" placeholder="First Name">
                    <input type="text" id="Name" class="input" name="LastName" placeholder="Last Name">
                </label><br>
                <label for="D.O.B">D.O.B :-
                    <input type="date" name="date" >
                </label><br>
                <label for="Gender">Gender:-
                    <span class="radio">
                        <input type="radio" id="Gender"  name="Gender" value="Male">Male
                        <input type="radio" id="Gender"  name="Gender" value="Female">Female
                        <input type="radio" id="Gender"  name="Gender" value="Others">Others
                    </span>
                </label><br>
                <label for="Proof">ID Proof:- 
                    <select name="Proof" id="Proof">
                        <option  value="AadharCard" selected>Aadhar Card</option>
                        <option  value="PanCard">Pan Card</option>
                        <option  value="Liscence">Liscence</option>
                        <option  value="D.O.B">D.O.B</option>
                         </select>    
                </label><br>
                <label for="UploadProof">Upload Proof:-
                    <input type="file" name="UploadProof" id="UploadProof">
                </label><br>
                <label for="UploadImage">Upload Image:-
                    <input type="file" name="UploadImage" id="UploadImage">
                </label><br>

                <button type="submit" onClick="Check()">Submit</button>
                <button type="reset">Reset</button>
                
                <script lang="JavaScript">
                    function Check(){
                        
                    }
                </script>
                
            </form>
        </div>
    </div>
</body>
</html>