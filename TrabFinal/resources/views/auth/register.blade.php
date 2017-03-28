@extends('admin.admin_template')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="div_gestante">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label label-gestante">Nome: </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control input-gestante" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apelido') ? ' has-error' : '' }}">
                            <label for="apelido" class="col-md-4 control-label label-gestante">Como gostaria de ser chamado(a): </label>

                            <div class="col-md-6">
                                <input id="apelido" type="text" class="form-control input-gestante" name="apelido" value="{{ old('apelido') }}" required autofocus>

                                @if ($errors->has('apelido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apelido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('data_nasc') ? ' has-error' : '' }}">
                            <label for="data_nasc" class="col-md-4 control-label label-gestante">Data de nascimento: </label>

                            <div class="col-md-6">
                                <input id="data_nasc" type="date" class="form-control input-gestante" name="data_nasc" value="{{ old('data_nasc') }}" required autofocus>

                                @if ($errors->has('data_nasc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data_nasc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('data_parto') ? ' has-error' : '' }}">
                            <label for="data_parto" class="col-md-4 control-label label-gestante">Data prevista do parto: </label>

                            <div class="col-md-6">
                                <input id="data_parto" type="date" class="form-control input-gestante" name="data_parto" value="{{ old('data_parto') }}" required autofocus>

                                @if ($errors->has('data_parto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data_parto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                            <label for="telefone" class="col-md-4 control-label label-gestante">Telefone: </label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control input-gestante" name="telefone" value="{{ old('telefone') }}" required autofocus>

                                @if ($errors->has('telefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                            <label for="celular" class="col-md-4 control-label label-gestante">Celular: </label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control input-gestante" name="celular" value="{{ old('celular') }}" autofocus>

                                @if ($errors->has('celular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('conjuge') ? ' has-error' : '' }}">
                            <label for="conjuge" class="col-md-4 control-label label-gestante">Nome do(a) parceiro(a): </label>

                            <div class="col-md-6">
                                <input id="conjuge" type="text" class="form-control input-gestante" name="conjuge" value="{{ old('conjuge') }}" autofocus>

                                @if ($errors->has('conjuge'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('conjuge') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label label-gestante">Email: </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control input-gestante" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label label-gestante">Senha: </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input-gestante" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label label-gestante">Confirme a senha:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input-gestante" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary login__submit">
                                    Criar conta
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
