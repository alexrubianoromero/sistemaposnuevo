// function menuOpciones()
// {

//     alert('menu opciones ');
// }

 function menuOpciones(){
        const http=new XMLHttpRequest();
        const url = '../opciones/opciones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("columna1Dashboard").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=menuOpciones"
        // + "&id="+id
        // + "&tipoMov=2"
        );
    }