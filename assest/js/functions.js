$('#submit').on('click',function(e){
    const base = document.getElementById("base").value;
    const altura = document.getElementById("altura").value;

    var params = {
        'base': base,
        'altura': altura
    };
    
    $.ajax({
        type: 'post',
        url: 'controllers/calcularArea.php',
        data: params,
        dataType: 'json',
        success:function(response){
            $("#resultado").text(response);
        }
    });
});