      </div>
      <!-- { FIN CONTENIDO } -->
    </div>
  </div>
      <!-- { CONTENIDO PRINCIPAL } -->

  <br>
  <br>
  <br>
  <br>
  <br>

	<!-- { FOOTER } -->
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Sistema CAVA 2017 - <a href="https://www.linkedin.com/in/gal-pab/" target="_blank">Pablo Gallardo <i class="fa fa-linkedin" aria-hidden="true"></i></a> -  
               <a target="_blank" href="https://www.linkedin.com/in/samuel-benitez-877657127/">Samuel Benítez <i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
            
         </div>
    </footer>
     <!-- { FIN FOOTER } -->

     <link href="<?=base_url('assets/template/')?>vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url('assets/template/')?>js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="<?=base_url('assets/template/')?>js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url('assets/template/')?>bootstrap/js/bootstrap.min.js"></script>
                
    <script src="<?=base_url('assets/template/')?>vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="<?=base_url('assets/template/')?>vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="<?=base_url('assets/template/')?>js/custom.js"></script>
    <script src="<?=base_url('assets/template/')?>js/tables.js"></script>

    <script>
     $('#myTabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show')
      })
    </script>

    <script>

      $(document).on('ready',function(){

        $('#bono').click(function(){
          setTimeout(function() { location.reload();  }, 1000);
        });

        $('.eliminar').on('click',function(e){
          e.preventDefault();
          if(confirm('ELIMINAR PARTICIPANTE?')){
            location.href = $(this).attr('href');
          }
        });

        $('body').on('click','.open_modal',function(){
          id_trabajo = $(this).attr('data-idtrabajo');
          id_persona = $(this).attr('data-idpersona');
          estado = $(this).attr('data-estado');

          $('#t_no').css('display','none');
          $('#t_tramite').css('display','none');
          $('#t_si').css('display','none');

          if(estado == 'NO')
              $('#t_no').css('display','block');
          else if(estado == 'EN TRAMITE')
            $('#t_tramite').css('display','block');
          else
            $('#t_si').css('display','block');

          $.ajax({
            url  : '<?=base_url('trabajos/escritos_ajax')?>',
            type : 'post',
            data : {id_trabajo : id_trabajo},
            success: function(data){
              data =  JSON.parse(data);
              $('.modal-title').html('<b>' + data[0].titulo + '</b>'); 
              $('#mails').html('');
              for(i=0;i<data.length;i++){

                html  = '<tr>';
                html += '<td>'+data[i].nombre+'</td>';
                html += '<td>'+data[i].apellido+'</td>';
                html += '<td>'+data[i].mail+'</td>';



                if(id_persona == data[i].id_persona)
                  html += '<td><span class="glyphicon glyphicon-envelope"></span></td>';
                else
                  html += '<td>&nbsp;</td>';

                $('#mails').append(html);
              }
              
              console.log(data);
            }
          });
        })
      

        //enviar mail
        $(".enviar-mail").on('click',function(){
          var td = $(this).parent();
          var br = td.siblings('td.estado-td');

          $.ajax({
            url  : '<?=base_url('certificados/enviar_mail')?>',
            type : 'post',
            data : {id_ticket : $(this).attr('data-id-ticket')},
            beforeSend : function(){
                td.html('<img src="" title="enviando...">');
            },
            success : function(data){
              if(data == 1){
                br.text('ENVIADO');
                td.html('<a class="btn btn-success">Enviado</a>');
              }else{
                alert('ocurrio un error al enviar');
              }
            },
            error : function(){
              alert('Error en el servidor');
            }
          });
        });

      });//jquery

      
    </script>


  </body>
</html>