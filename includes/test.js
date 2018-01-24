$(document).ready(function(){   
                    $( "#txtnombre" ).autocomplete({
                        source: "buscarnombre.php",
                        
                    });
                    
                    $("#txtnombre").focusout(function(){
                        $.ajax({
                            url:'productos.php',
                            type:'POST',
                            dataType:'json',
                            data:{ matricula:$('#txtnombre').val()}
                        }).done(function(respuesta){

                            $("#txtid").val(respuesta.txtid);
                            $("#txtprecio").val(respuesta.txtprecio);
                            $("#txtstock").val(respuesta.txtstock);
                        });
                    });                         
                });