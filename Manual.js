//  Manual de usuario
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
    placement: 'left',
    onShow: function(){
            
            },
  orphan: true            
  },

{
    element: "#Paso2",
    title: "Valores   ",
    content: "Podemos modificar la cantidad de items que deseamos comprar",
    placement: 'right',
    onShow: function(){
            
            },
  orphan: true            
  },

{
    element: "#Paso3",
    title: "Valores   ",
    content: "Clic en Agregar para añadirlo a la cesta",
    placement: 'right',
    onShow: function(){
              
            },
  orphan: true            
  },
  

{
    element: "#Paso4",
    title: "Valores   ",
    content: "Boton para limpiar todos los items del carrito",
    placement: 'left',
    onShow: function(){
              
            },
  orphan: true            
  },

	{
    element: "#Paso5",
    title: "Valores   ",
    content: "Boton para eliminar item del carrito",
    placement: 'left',
    onShow: function(){
              
            },
  orphan: true            
	},

  {
    element: "#Paso6",
    title: "Valores   ",
    content: "Clic para pagar los items del carrito",
    placement: 'left',
    onShow: function(){
            //$("#Paso6").click();
            },
  orphan: true            
  },


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