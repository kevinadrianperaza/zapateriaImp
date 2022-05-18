//  Manual de usuario
//--Recorrido del usuario

var pasos =[
 {
    title: "Manual interactivo",
    content: "Uso del inventario de la  zapateria",
    orphan: true
  },

{
    element: "#Paso1",
    title: "Valores   ",
    content: "Clic para regresar a la página principal",
    placement: 'left',
    onShow: function(){
            
            },
  orphan: true            
  },

{
    element: "#Paso2",
    title: "Valores   ",
    content: "Clic agregar nuevo producto al inventario",
    placement: 'left',
    onShow: function(){
            
            },
  orphan: true            
  },

{
    element: "#Paso3",
    title: "Valores   ",
    content: "Clic para modificar producto del inventario",
    placement: 'left',
    onShow: function(){
              
            },
  orphan: true            
  },
  

{
    element: "#Paso4",
    title: "Valores   ",
    content: "Clic para eliminar producto del inventario",
    placement: 'left',
    onShow: function(){
              
            },
  orphan: true            
  },

	{
    element: "#Paso5",
    title: "Valores   ",
    content: "Clic en buscar una vez escrita la busqueda en la barra para localizar producto",
    placement: 'left',
    onShow: function(){
              
            },
  orphan: true            
	},



];
$.each(pasos, function(i, step){
  step.title += '<span class="pull-right">'+(i+1)+'/'+pasos.length+'</span>';
  var percent = parseInt(((i+1) / pasos.length) * 100);
  step.content = '<div class="pbar_wrapper"><hr class="pbar" style="width:'+percent+'%;"></div>' + step.content;
});
function IniciaManualProductos(){
    var tour = new Tour({
      backdrop: true,
      storage: false,
      steps: pasos
    });
    
    tour.init();
    tour.restart();
    
};