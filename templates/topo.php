<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site</title>
   
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            bottom: 0;
            font-family: 'Roboto', sans-serif;
        }

        body, html {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        .topo{
            background-color: #333;
            color: white;
            width: 100%;
            height: 150px;
            text-align: center;
            padding: 15px;
        }
        footer{
            color: white;
            background-color: #333;
            box-sizing: border-box;
        }
        .rodape{
            width: 100%;
            text-align: center;
            box-sizing: border-box !important; 
            display: flex;
            justify-content: center;
            padding: 15px 0px;
        }
        nav ul{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content:space-around ;
            list-style: none;
            font-size: 16px;
            margin: 35px 0px;
        }
        nav a{
            font-size: 20px;
            color: black;
            text-decoration: none;
            padding: 10px;
            border-radius: 8px;
        }
        nav a:hover{
            background-color: #333;
            color: white;
        }
        form button:hover{
            background-color: #333;
            color: white;
        }
        .conteudo, .quemsomos p{
            color: black;
            font-size: 18px;
        }
        .conteudo p{
            margin: 50px 0px;
        }
        .quemsomos{
            font-size: 16px;
            line-height: 25px;
            margin: 100px 0px;
        }
        .quemsomos h2{
            margin: 45px 0px;
            color: black;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form{
            border: #333 solid 2px;
            width: 100%;
            max-width: 500px;
            min-height: 50vh;
            margin: 30px 30vw;
            padding: 25px 0px;
        }
        .label{
            margin-top: 15px;
        }
        .input_entrada{
            width: 250px;
            height:px;
            padding: 2px 0px;
            margin-top: 15px;
        }
        .input_mensagem{
            max-width: 250px;
            min-width: 250px;
            min-height: 150px;
            max-height: 150px;
        }
        .checkbox{
            margin: -16px -15px 35px 250px;
            
        }
        .button{
            width: 80px;
            height: 30px;
            border-radius: 5px;
            border: 2px solid #333;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <div class="topo">
        <h1 style="margin-bottom: 15px;">HScoding</h1>
        <h3>Pagina web com PHP + HTML + CSS</h3>
    </div>
</body>
</html>
