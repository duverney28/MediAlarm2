


var myModal = new bootstrap.Modal(document.getElementById('medicamentos'));
document.addEventListener('DOMContentLoaded', function () {
  let formulario = document.querySelector("#formulariodeMedicamentos");
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
    
   // events: "/medicamentos/mostrar",
   eventSources: {
      url: '/medicamentos/mostrar',
      method: 'POST',
      extraParams: {
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
          formulario.start.value=respuesta.data.start;
          formulario.end.value= respuesta.data.end;

          formulario.id.value=respuesta.data.id;
          formulario.title.value=respuesta.data.title;
          formulario.frecuencia.value=respuesta.data.frecuencia;
          formulario.hora.value=respuesta.data.hora

          console.log(respuesta.data.start);

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

  });

  

