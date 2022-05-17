/*  Manual de usuario
*/
//--Recorrido del usuario
var pasos =[
 {
    title: "Manual interactivo",
    content: "Uso del programa de zapateria",
    orphan: true
  },

{
    element: "#Paso1",
    title: "Valores   ",
    content: "Clic para agregar productos a la BD",
    placement: 'right',
    onShow: function(){
              // $("#nuevasol").prop('disabled', true);
              //$("#Nombre").val('Kevin');
            },
  orphan: true            
  },

{
    element: "#Paso2",
    title: "Valores   ",
    content: "Podemos modificar la cantidad de items que deseamos comprar",
    placement: 'right',
    onShow: function(){
              // $("#nuevasol").prop('disabled', true);
              //$("#Apellido1").val('Adrián');
            },
  orphan: true            
  },

{
    element: "#Paso3",
    title: "Valores   ",
    content: "Clic en Agregar para añadirlo a la cesta",
    placement: 'right',
    onShow: function(){
              
              $("#Paso3").click();
              //$("#Apellido2").val('Peraza');
            },
  orphan: true            
  },

{
    element: "#Paso4",
    title: "Valores   ",
    content: "Agregue su género",
    placement: 'right',
    onShow: function(){
              // $("#nuevasol").prop('disabled', true);
              $("#Sexo").val('Masculino');
            },
  orphan: true            
  },

	{
    element: "#Paso5",
    title: "Valores   ",
    content: "Agregue el año actual",
    placement: 'right',
    onShow: function(){
              // $("#nuevasol").prop('disabled', true);
              $("#valor1").val('2022');
            },
  orphan: true            
	},

  {
    element: "#Paso6",
    title: "Valores   ",
    content: "Agregue su año de nacimiento",
    placement: 'right',
    onShow: function(){
              // $("#nuevasol").prop('disabled', true);
              $("#valor2").val('1998');
            },
  orphan: true            
  },

  {
    element: "#Paso8",
    title: "Resultado",
    content: "Presione el botón de calcular",
    placement: 'auto',
    onShow: function(){
              // $("#nuevasol").prop('disabled', true);
              //$("#multiplicar").button
            },
  orphan: true            
  },

  {
    element: "#Paso7",
    title: "Calcular",
    content: "Visualizará su edad",
    placement: 'auto',
    onShow: function(){
              // $("#nuevasol").prop('disabled', true);
              //$("#multiplicar").button
            },
  orphan: true            
  }


];
$.each(pasos, function(i, step){
  step.title += '<span class="pull-right">'+(i+1)+'/'+pasos.length+'</span>';
  var percent = parseInt(((i+1) / pasos.length) * 100);
  step.content = '<div class="pbar_wrapper"><hr class="pbar" style="width:'+percent+'%;"></div>' + step.content;
});
function IniciaManual(){
    var tour = new Tour({
      backdrop: true,
      storage: false,
      steps: pasos
    });
    
    tour.init();
    
    tour.restart();
    
};