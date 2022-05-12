var myModals = new bootstrap.Modal(document.getElementById('ventanamodaltwo'));
var myModal = new bootstrap.Modal(document.getElementById('medicamentos'));
document.addEventListener('DOMContentLoaded', function () {
  let formulario = document.querySelector("#formulariodeMedicamentos");
  let fomulario_two= document.querySelector("#formularioPerfiles");
  var calendarEl = document.getElementById('agenda');
  var calendar = new FullCalendar.Calendar(calendarEl, {

    
    initialView: 'dayGridMonth',
    locale: "es",
    displayEventTime:false,

    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth'

    },

//events: "/medicamentos/mostrar",

 eventSources: {
   
    url: '/medicamentos/mostrar',
   
     failure:function(){
      alert('there was an error');
    },     extraParams: {
            _token:formulario._token.value,
    }
  
 },
    
    dateClick: function (info) {
      formulario.reset();
      formulario.start.value=info.dateStr;
      formulario.end.value=info.dateStr;

      myModal.show();
    },
    eventClick:function(info){

      var evento= info.event;
      console.log(evento);
      axios.post("/medicamentos/editar/"+info.event.id).

      then(
        (respuesta) => {

          formulario.textColor.value=respuesta.data.textColor;
          formulario.color.value=respuesta.data.color;
          formulario.start.value=respuesta.data.start;
          formulario.end.value= respuesta.data.end;
          formulario.id_user.value=respuesta.data.id_user;
          formulario.id.value=respuesta.data.id;
          formulario.title.value=respuesta.data.title;
          formulario.frecuencia.value=respuesta.data.frecuencia;
          formulario.hora.value=respuesta.data.hora;

          myModal.show();
        }
      ).catch(
        error => {
          if (error.response) {
            console.log(error.response.data);

          }
        });

    }
    


  });


  calendar.render();

  document.getElementById("btnGuardar").addEventListener("click", function () {
    enviarDatos("medicamentos/registro");

  });

  document.getElementById("btnEliminar").addEventListener("click", function () {
    enviarDatos("medicamentos/borrar/"+formulario.id.value);

  });

  document.getElementById("btnModificar").addEventListener("click", function () {
    enviarDatos("medicamentos/actualizar/"+formulario.id.value);

  });

  
  document.getElementById("btnGuardarProfile").addEventListener("click", function () {
    enviarDatosProfile("profile/registro");

  });

 
    function enviarDatos(url){

      const datos= new FormData(formulario);

      axios.post(url, datos).

      then(
        (respuesta) => {
          calendar.refetchEvents();
          myModal.hide();
        }
      ).catch(
        error => {
          if (error.response) {
            console.log(error.response.data);

          }
        });
    }


    function enviarDatosProfile(url){

      const data= new FormData(fomulario_two);

      axios.post(url, data).

      then(
        (respuesta) => {


          console.log("se agrego succesfull");
          myModals.hide();
          
        }
      ).catch(
        error => {
          if (error.response) {
            console.log(error.response.data);

          }
        });
    }

  });







  
 


  

  

