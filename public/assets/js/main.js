
document.addEventListener('DOMContentLoaded', () => {
  "use strict";
  const copy_button = document.querySelector("#copy-button");
  copy_button.addEventListener("click", function (e) {
    var copyText = document.getElementById("mail-input");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    new Noty({
      type: 'success',
      layout: 'topRight',
      text: 'Panoya Kopyalandı.',
      timeout: 1500
    }).show();
  });
});

function darken_screen(yesno){
    if( yesno == true ){
      document.querySelector('.screen-darken').classList.add('active');
    }
    else if(yesno == false){
      document.querySelector('.screen-darken').classList.remove('active');
    }
  }
  
  function close_offcanvas(){
    darken_screen(false);
    document.querySelector('.mobile-offcanvas.show').classList.remove('show');
    document.body.classList.remove('offcanvas-active');
  }

  function show_offcanvas(offcanvas_id){
    darken_screen(true);
    document.getElementById(offcanvas_id).classList.add('show');
    document.body.classList.add('offcanvas-active');
  }

  document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('[data-trigger]').forEach(function(everyelement){
      
      let offcanvas_id = everyelement.getAttribute('data-trigger');
      
      everyelement.addEventListener('click', function (e) {
        e.preventDefault();
            show_offcanvas(offcanvas_id);
          
      });
    });

    document.querySelectorAll('.btn-close').forEach(function(everybutton){
      
      everybutton.addEventListener('click', function (e) {
        e.preventDefault();
            close_offcanvas();
        });
    });

    document.querySelector('.screen-darken').addEventListener('click', function(event){
      close_offcanvas();
    });
    
    }); 
  // DOMContentLoaded  end