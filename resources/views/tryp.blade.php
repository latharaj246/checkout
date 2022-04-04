<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <html>
<head>
<title>Trigger Event</title>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<style>
    button
    {
        font-size: 25px;
        border-radius: 5px;
    }
</style>

<script>
    $(document).ready(function () {
        $("#btnOne").click(function (){
            $(this).html((($(this).html() *1) + 1));

        })
          $("#btnTwo").click(function (){
            $(this).html((($(this).html()*1)+1));
        // //     $("#btnOne").trigger ("click");
        });

    });
</script>



</head>
<body>
    <button id="btnOne">1</button>
    <button id="btnTwo">2</button>
</body>
</html>
    




</body>
</html>
{{-- ==================================================================================
<style>
    button
    {
        font-size: 25px;
        border-radius: 5px;
    }
</style>
<script>
    $(document).ready(function () {
        $("#btnOne") iclick(function (){
            $(this).html((($(this).html()*1) + 1))
        })
        $("#btnTwo").click(function (){
            $(this).html((($(this).html()*1) + 1))
            $("#btnOne").trigger ("click");
        });

    }); --}}
