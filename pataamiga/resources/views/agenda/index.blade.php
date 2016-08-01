<!-- Display de apresentação da agenda -->
@extends('layouts.agenda')
@section('content')
<div id='calendar'></div>


<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Novo Agendamento</h4>
        </div>
        <div class="modal-body">
          	<form role="form" id='formAgenda'>
          	{!! csrf_field() !!}
          	<div class="form-group">
			    <label for="exampleInputPassword1">Data</label>
			    <input type='date' class="form-control" id="atend_data" name='data_servico' />
			  </div>
			   <div class="form-group">
			    <label for="exampleInputPassword1">Hora</label>
			    <input type="time" class="form-control" id="atend_hora" name="hora_servico">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Cliente</label>
			    <select class="form-control" id='cliente' name='cod_cliente' >
				  <option  value="0">Selecione</option>
				   @foreach($clientes as $cliente)
                	<option  value="{{$cliente['cod_cliente']}}">{{$cliente['nome']}}</option>
                    @endforeach
				</select>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Animal</label>
			    <select class="form-control" id='animal' name="cod_animal">
				   
				</select>
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Serviço</label>
			    <select class="form-control" id='servico' name='cod_servico'>
				  <option  value="0">Selecione</option>
				   @foreach ($servico as $servico)
	                <option value="{{$servico['cod_servico']}}">{{$servico['servico']}}</option>
	                @endforeach
				</select>
				<div id="info_servico">
		            <p>Duração: <span id="duracao_servico"> </span> <br>
		            <p>Preço:   <span id="preco_servico"> </span><br>
		            <input type="hidden" name="valor" id="valor_servico" value="">
		        </div>
			  </div>
			  
			   <div class="form-group">
			    <label for="exampleInputPassword1">Observações</label>
			     <textarea name='observacao' class="form-control" rows="3"></textarea>
			  </div>
			 
			  <input type="hidden" name="ajax" id="" value="1">
			  <button type="button" id='btnSalvarAgenda' class="btn btn-primary">Salvar</button>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@endsection

@section('scripts')
 <script>
        $(document).ready(function() {
            console.log("aqui");
            // page is now ready, initialize the calendar...
             $.get( "/agendamentos", function( data ) {
                   
                    $('#calendar').fullCalendar({
			                header: {
			                    left: 'prev,next today',
			                    center: 'title',
			                    right: 'month,agendaWeek,agendaDay'
			                },

			                eventLimit: true, // allow "more" link when too many events
			                events: data

			            });
                    $('#calendar').fullCalendar('option', 'lang', 'pt-br');

            });
           

          
           
            $('.fc-day').live('click', (function() {
                console.log("dia");
                var celulaDia = $(this);
                console.log(celulaDia.attr('data-date'));
                var dia = $.fullCalendar.moment(celulaDia.attr('data-date'));
                $('#calendar').fullCalendar( 'changeView', 'agendaDay' );
                $('#calendar').fullCalendar( 'gotoDate', dia );
            }));

            $('tr').live('click',(function(){
            	var tr = $(this);
            	
            	if(tr.attr('data-time') != undefined){
            				console.log('TR COM HORA');
            				console.log($('.fc-day-header').attr('data-date'));
            				$('#atend_data').val($('.fc-day-header').attr('data-date'));
            				$('#atend_hora').val(tr.attr('data-time'));
            				$('#myModal').modal('show')
            	}
            }));


        });

        $("#info_servico").hide();

        $('#cliente').change(function(){
            $('#animal').html('<option value="0">Carregando...</option>');
            
            var idCliente = $(this).val();
            $.get( "/animais-cliente/"+idCliente, function( data ) {
                    var opcoes = '<option value="0">Selecione</option>';
                    $.each(data, function (index, animal) {
                      opcoes += '<option value="'+animal.cod_animal+'">'+animal.nome+'</option>';
                      //
                      
                    });
                    $('#animal').html(opcoes);
            });
        });


        $('#servico').change(function(){            
            var idServico = $(this).val();
            $.get( "/servico-detalhes/"+idServico, function( data ) {
                   
                    $('#duracao_servico').html(data.duracao);
                    $('#preco_servico').html(data.preco);
                    $('#valor_servico').val(data.preco);
                    $("#info_servico").show();
            });
        })

        $('#btnSalvarAgenda').live('click', (function(){
        	 $.post( "/atendimento/salvar", $('#formAgenda').serialize(), function( data ) {
					if(data == 1){
						alert("Agendamento realizado com sucesso!");
						$('#myModal').modal('hide');
						$('#calendar').fullCalendar( 'changeView', 'month' );
					}                    
            }).fail(function() {
		    alert( "Falha interna, contate o suporte!" );
		  });
        }))
    </script>
@endsection