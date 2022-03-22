<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tạo Contact Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
        *{
            margin:0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
        }
        section{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #112d42;
        }
        section::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width:50%;
            height: 100%;
            background: #03a9f4;
        }
        section .container{
            position: relative;
            min-width: 1100px;
            min-height: 550px;
            display:flex;
            z-index: 100;
        }
        section .container .containerinfo{
            position: absolute;
            top: 40px;
            width: 350px;
            height: calc(100% - 80px);
            background: #0f3959;
            z-index: 1;
            padding: 0px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 20px 20px rgba(0,0,0,0.2);
        }
        /* section .container .containerinfo img{
            height: 100%;
            width: 100%;
        } */

        section .container .containerinfo h2{
            color: #fff;
            font-size: 24px;
            margin: 20px 0;
        }
        section .container .containerinfo li{
            position: relative;
            list-style: none;
            display: flex;
            margin: 20px 0;
            cursor: pointer;
            align-items: flex-start;
        }
        section .container .containerinfo li span{
            color: #fff;
            margin-left: 10px;
            font-weight: 300;
            opacity: 0.5;
            font-size: 20px;
        }
        /*Hiệu Ứng Hover Cho Thẻ Li*/
        section .container .containerinfo li:hover span{
            opacity: 1;
        }
        section .container .containerinfo .sci{
            position: relative;
            display:flex;
        }
        section .container .containerinfo .sci li{
            list-style: none;
            margin-right: 15px;
        }
        section .container .containerinfo .sci li a{
            text-decoration: none;
            opacity: 0.5;
            color: #fff;
            font-size: 32px;
        }
        /*Hiệu Ứng Hover Icon*/
        section .container .containerinfo .sci li:hover a{
            opacity: 1;
        }
        section .container .containerForm{
            position: absolute;
            padding: 70px 50px;
            background: #fff;
            margin-left: 150px;
            padding-left: 250px;
            width: calc(100% - 150px);
            height: 100%;
            box-shadow: 0 50px 50px rgba(0,0,0,0.5);
        }
        section .container .containerForm h2{
            color: #0f3959;
            font-size: 24px;
            font-weight: 500;
        }
        section .container .containerForm .formBox{
            position: relative;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-top: 30px;
        }
        section .container .containerForm .formBox .inputBox{
            position: relative;
            margin: 0 0 35px 0;
        }
        section .container .containerForm .formBox .inputBox.w50{
            width: 47%;
        }
        section .container .containerForm .formBox .inputBox.w100{
            width: 100%;
        }
        section .container .containerForm .formBox .inputBox input,
        section .container .containerForm .formBox .inputBox textarea{
            width: 100%;
            padding: 5px 0;
            resize: none;
            font-size: 18px;
            font-weight: 400;
            color: #333;
            border: none;
            border-bottom: 1px solid #777;
            outline: none;
        }
        section .container .containerForm .formBox .inputBox textarea{
            min-height: 120px;
        }
        section .container .containerForm .formBox .inputBox input[type="submit"]{
            position: relative;
            cursor: pointer;
            background: #0f3959;
            color: #fff;
            border: none;
            max-width: 150px;
            padding: 12px;
        }
        section .container .containerForm .formBox .inputBox input[type="submit"]:hover{
            background:  #ff568c;
        }
    </style>
    <body>
        <section>
            <div class="container">
                <div class="containerinfo">
                    <!-- <video controls>
                        <source src="public/assets/img/Landscape - 35703.mp4" type="audio/mp4">
                    </video> -->
                    <!-- <img src="public/assets/img/anh-dong-bien-dem-dep-menh-mang.gif" alt=""> -->
                </div>
                <div class="containerForm">
                    <h2>Gửi Lời Nhắn</h2>
                    <div class="formBox">
                        @if(count($errors) > 0)
                        <div class="arlert arlert-danger">
                            <button type="button" class="btn btn-warning close" data-dismiss="alert">x</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if($message = Session::get('success'))
                        <div class="arlert arlert-danger">
                            <button type="button" class="btn btn-warning close" data-dismiss="alert">tắt</button>
                            <strong class='text-warning'>{{ $message }}</strong>
                        </div>
                        @endif
                        <form action="{{ route('contact.sendmail') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="inputBox w100">
                                <input type="text" name="tomail" required>
                                <span>Email</span>
                            </div>
                            <div class="inputBox w100">
                                <input type="text" name="subject" required>
                                <span>Tiêu đề</span>
                            </div>
                            <div class="inputBox w100">
                                <textarea name="message" required></textarea>
                                <span>Lời Nhắn Của Bạn</span>
                            </div>
                            <div class="inputBox w100">
                                <input type="submit" value="Gửi">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>