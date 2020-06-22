@extends('layouts.app')

@section('body')


    <div class="content">
        <div class="jumbotron border border-secondary">
            <div class="card-body">
                <h5 class="card-title mb-4">Cadastrar Usuário</h5>
                <hr>
                <br>
                <form id="framework_form" action="/store" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nome">Nome:</label> <label class="required" >*</label>
                                <input type="text" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" placeholder="Ex: João Victor Ferreira Souto"
                                       value="{{ old('nome')}}" autofocus>
                                <div class="invalid-feedback">
                                    @if ($errors->has('nome'))
                                        {{ $errors->first('nome') }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="cpf">CPF</label> <label class="required" >*</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="cpf" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" placeholder="Ex: 999.999.999-99" aria-label="Username" aria-describedby="basic-addon1"
                                           value="{{ old('cpf') }}">
                                    <div class="invalid-feedback">
                                        @if ($errors->has('cpf'))
                                            {{ $errors->first('cpf') }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="email">Email:</label> <label class="required" >*</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Ex: email@email.com" aria-label="Username" aria-describedby="basic-addon1"
                                           value="{{ old('email') }}">
                                    <div class="invalid-feedback">
                                        @if ($errors->has('email'))
                                            {{ $errors->first('email') }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="tel">Telefone:</label>
                                <input type="text" id="tel" class="form-control {{ $errors->has('tel') ? 'is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" autofocus>
                                <div class="invalid-feedback">
                                    @if ($errors->has('tel'))
                                        {{ $errors->first('tel') }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="birth_date">Dt. Nascimento:</label> <label class="required" >*</label>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control datepicker form-control-alternative{{ $errors->has('birth_date') ? ' is-invalid' : '' }}"
                                           name="birth_date" id="input-birth_date" value="{{ old('birth_date') }}" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
                                <select id="categoria[]" class="form-control" name="categoria" value="{{ old('categoria') }}"  autofocus>
                                    <option>Administração</option>
                                    <option>Contabilidade</option>
                                    <option>Engenharia</option>
                                    <option>Medicina</option>
                                    <option>Tecnologia</option>
                                </select>

                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="pr-3" style="text-align: right;">
                        <button type="button" onClick="cancelar()" class="btn btn-cancel">Cancelar</button>
                        <button type="submit" class="btn btn-default ml-2">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('javascript')

    <script type="text/javascript">


//        $('#categoria').multiselect({
//            nonSelectedText: 'Seleciona categoria(s)',
//            enableFiltering: true,
//            enableCaseInsensitiveFiltering: true,
//            buttonWidth:'400px'
//        });
//
//        $('#framework_form').on('submit', function(event){
//            event.preventDefault();
//            var form_data = $(this).serialize();
//            $.ajax({
//                url:"insert.php",
//                method:"POST",
//                data:form_data,
//                success:function(data)
//                {
//                    $('#categoria option:selected').each(function(){
//                        $(this).prop('selected', false);
//                    });
//                    $('#categoria').multiselect('refresh');
//                    alert(data);
//                }
//            });


        //máscaras
        $('#tel').mask("(99) 9999-999?9")
            .focusout(function (event) {
                var target, phone, element;
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                phone = target.value.replace(/\D/g, '');
                element = $(target);
                element.unmask();
                if(phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            });

        function cancelar() {
            var url = '{{ route("usuario-list") }}';
            window.location.href = url;
        }




    </script>

@endsection
