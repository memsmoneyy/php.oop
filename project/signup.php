<?php include 'headAndFoot\header.php'; ?>
    <style type="text/css">
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body{
            background-image: url(img/a2.png);
        
            
             /* font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #87b6d6;
            border: 2px solid black; */
        }
        .center{
    border: 1px solid black;
    width: 440px;
    padding:10px 20px 5px 20px;
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    border-radius: 10px;

    top: 50%;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 440px;
    border-radius: 10px;
    background-color:white;
    
   
}

.center h2{
    text-align: center;
    padding:0 0 20px 0;
    border-bottom: 1px solid silver;

}
.center form{
    padding: 0 40px;
    box-sizing: border-box;
}


form .txt-field{
    position: relative;
    border-bottom:2px solid  #151414 ;
    margin:30px 0;
}

.txt-field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
font-size: 16px;
border: none;
background: none;
outline: none;
}

.txt-field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color:  #151414;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}
.txt-field input:focus ~label,
.txt-field input:valid ~label{
    top: -5px;
    color:#2691d9;
}
.pass{
    color: #adadad;
    cursor: pointer;
    margin: -5px 0 20px 5px ;

}

.pass:hover{
    text-decoration: underline;
}

input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    border-radius:25px ;
    background: #2691d9;
    font-size: 18px;
    color: #040d18;
 font-weight: 700;
 outline: none;
 cursor: pointer;
}
input[type="submit"]:hover{
    border-color: #2691d9;
    transition: .5s;
}

.labels{
    margin: 30px 0;
    font-size: 16px ;
    text-align: center;
color: #666666;
}

.labels a{
    color:#2691d9;
    text-decoration: none;
}
.labels a:hover{
    text-decoration: underline;
}

.title{
    text-align: center;
    margin-top: 10px;
}

.form-control{
    margin-top: 20px;
    outline: none;
    height: 40px;
    border-style: solid;
    border-color: #040d18;
    border-width: 1px;
    border-radius: 5px;
    padding:5px 10px ;
    }
    .form-control:focus{
        border-color: rgb(104, 104, 191);
        box-shadow:0 0 4px rgb(104, 104, 191);
        
    }

    
    .btn-signup{
        margin-top: 10px;
        height: 35px;
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        background-color: blue;
        border-color: blue;
        color: white;
        cursor: pointer;
        transition: all 0.15s ease-in-out;
    }
       
    </style>
    <form action="Dashboard.php">
    <div class="center">
            <h1>SignUp</h1>
            <div class="txt-field">
                <input type="text" pattern="^([A-Za-z]+[ ]|[A-Za-z])+$" title="Can contain upercase and lowercase letters, line space with no numbers" required>
                <label>Fullname</label>
            </div>
            <div class="txt-field">
                <input type="text" pattern="[A-Za-z\.]{4, 6}" title="Username must be between 4 to 6 characters in length and must contain only letters, numbers and periods (.)" required>
                <label>Username</label>
            </div>

            <div class="txt-field">
                <input type="email" required>
                <label>Email</label>
            </div>

            <div class="txt-field">
                <input type="password" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[A-Z])(?=.*[-\#\$\.\%\&\*])(?=.*[a-zA-Z]).{8}$" title="Password should be 8 characters, containing 1 upercase letter, 1 lowercase letter, 1 number, and any of this special character $, %, #, *, &" required>
                <label>Password</label>
            </div>

            <div class="txt-field">
                <input type="password" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[A-Z])(?=.*[-\#\$\.\%\&\*])(?=.*[a-zA-Z]).{8}$" title="Password should be 8 characters, containing 1 upercase letter, 1 lowercase letter, 1 number, and any of this special character $, %, #, *, &" required>
                <label>Repeat Password</label>
            </div>

        
                <input type="submit" value="SignUp">
                <label for="" class="labels">Already have an account?<a href="login.php">Login</a></label>
        </div>
            </form>
<?php include 'headAndFoot\footer.php'; ?>