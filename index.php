<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Document</title>
</head>
<body>
    <form >
        <input id="n1" name="n1" type="number">
        <input id="n2" name="n2" type="number">
    </form>
    <input onclick="showResult()" value="save" type="button">

    <h2 id="p1"></h2>
    <script>
        function showResult(){
            let n1 = document.getElementById("n1").value;
            let n2 = document.getElementById("n2").value;

            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                // console.log(this);
                let p = document.getElementById("p1");

                if(this.readyState == 4 && this.status == 200) {
                    console.log(this);
                    p.innerHTML = this.response;
                }
            }
            xmlhttp.open("GET", "form.php?n1="+n1+"&n2="+n2,true);
            // xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlenconeded");
            xmlhttp.send();
        }
    </script>
</body>
</html>