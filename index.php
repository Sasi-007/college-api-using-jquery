<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    #result{
        position:absolute;
        width:100%;
        max-width:870px;
        cursor:pointer;
        overflow-y:auto;
        max-height:400px;
        box-sizing:border-box;
        z-index:1001;
    }
    .link-class:hover{
        background-color:#f1f1f1;
    }
</style>
</head>
<body>
<br /><br />
<div class="container" style="width:900px;">
    <h2 align="center">Json</h2>
    <h3 align="center">College data</h3>
    <br /><br />
    <div align="center">
        <input type="text" name="search" placeholder="search all colleges" class="form-control"/>

</div>
<ul class="list-group" id="result"></ul>
<br />
</div>
</body>
</html>
<script>
$(document).ready(funcction(){
    $('#search').keyup(function(){
        $('#result').html('');
        var searchField=$('#search').val();
        var expression=new RegExp(searchField,"i");
        $.getJson('database.json',function(data){
            $.each(data,function(key,value){
                if(value.name.search(expression)!=-1|| value.location.search(expression)!=-1){
                    $('#result').append('<li class="list-group-item">'+results.College Name+'|<span class="text-muted">'+results.College Type+'</span></li>');
                }
            });
        });
    });
});

    </script>