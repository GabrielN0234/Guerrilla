function message(m){
    alert(m);
}

function showForms(path) {
    $.ajax({
    type: "GET",
    url: path,
    success: function(datos) {
        $("#container").html(datos);
    }
       
})
}

//function cargarleccion(nombre){
//alert("se ejecuto la funcion");
//$.ajax({
//    type: "GET",
//    url: "contenido/"+nombre+".html", 
//    data: "",
//    datatype: "html",
//    success: function(datahtml){
//    $("#contentlesson").html(datahtml);
//    },
//
//error:  function(){
//    $("#contentlesson").html("<p>error al cargar desde Ajax</p>")
//}
//
//});
//}