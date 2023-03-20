<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Siswa</title>
    <style>
        *{
			margin: 0;
			padding: 0;
		}
		body{
			background: rgb(28, 28, 28);
		}
        .logo{
			background: rgb(156, 255, 156);
			color: White;
			text-align: center;
			box-shadow: 0px 0px 10px black;
		}

		.logo h1{
			color: white;
			text-align: center;
			letter-spacing: 2px;
			font-family: Cambria;
			padding: 2px;
			border-bottom: 2px solid white;
		}

		.logo a{
			text-decoration: none;
			color: rgb(0, 0, 0);
			letter-spacing: 4px;
		}

        .container{
            
            display: flex;
            justify-content: center;
        }

        .card{
            padding: 20px;
            margin: 25px 25px;
            box-shadow: 0px 0px 10px black;
            width: 400px;
            background-color: white;
            border-radius: 10px;
            text-align: center;
        }

        .card h1{
            font-size: 40px;
            font-family: monospace;
            padding: 2px;
            color: rgb(0, 161, 107);
            border-bottom: 2px solid rgb(31, 126, 80);
        }

        .button{
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        #btn{
            background-color: rgb(17, 17, 17);
            color: rgb(255, 255, 255);
            padding: 2px;
            border-radius: 4px;
            width: 80px;
            height: 30px;
            font-size: 18px;
            font-family: cambria;
            border: none;
        }

        #btn:hover{
            color: rgb(135, 244, 191);
            background-color: rgb(14, 14, 14);
        }

    </style>
</head>
<body>
    <div class="logo">
        <h1>Absensi Siswa</h1>
        <a>SMKS PGRI 2 SIDOARJO</a>
    </div>
    <div class="container">
        <div class="card">
            <img src="https://img.freepik.com/free-vector/boy-girl-school-uniform_1308-36006.jpg?w=740&t=st=1679110128~exp=1679110728~hmac=fd7fbc86b14d829a5761b0e5144d1d4e49c199e5cb83f5f4dba5c857c03b5343" width="100%" height="auto">
            <h1>Berhasil Absen</h1>
            <div class="button">
                <input type="submit" value="Kembali" id="btn">
            </div>
        </div>
    </div>
</body>
</html>