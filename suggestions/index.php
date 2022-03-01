<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Serch User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestion: <span id="output" style="font-weight: bold;"></span></p>
    </div>
</body>
<script defer>

    function showSuggestion(str){
        if(str.length == 0){
            document.getElementById('output').innerHTML = '';
        }else{
            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = /*function*/ ()=>{
                if(xhr.readyState == 4 && xhr.status == 200){
                    document.getElementById('output').innerHTML = xhr.responseText;
                }
            }
            xhr.open('GET', 'main.php?q='+str, true);


            xhr.send();
        }
    }
</script>
</html>