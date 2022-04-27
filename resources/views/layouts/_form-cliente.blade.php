@csrf
    <div class="row">
      <div class="col">
        <label for="nomeCliente"></label>
        <input type="text" class="form-control" placeholder="Nome" name="nomeCliente" value="{{isset($registro->nomeCliente) ? $registro->nomeCliente:old('nomeCliente')}}">
        @if ($errors->has('nomeCliente'))
        <span style="color: red">{{$errors->first('nomeCliente')}}</span>
        @endif  
      </div>
      <div class="col">
        <label for="codigoCliente"></label>
        <input type="text" class="form-control" maxlength="8" placeholder="Código" name="codigoCliente" value="{{isset($registro->codigoCliente) ? $registro->codigoCliente:old('codigoCliente')}}">
        @if ($errors->has('codigoCliente'))
        <span style="color: red">{{$errors->first('codigoCliente')}}</span>
        @endif  
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="telefoneCliente"></label>
        <input type="text" class="form-control" id="telefoneCliente" placeholder="Telefone" name="telefoneCliente" value="{{isset($registro->telefoneCliente) ? $registro->telefoneCliente:old('telefoneCliente')}}">
        @if ($errors->has('telefoneCliente'))
        <span style="color: red">{{$errors->first('telefoneCliente')}}</span>
        @endif  
      </div>
      <div class="col">
        <label for="idadeCliente"></label>
        <input type="number" class="form-control" id="idadeCliente" placeholder="Idade" name="idadeCliente" value="{{isset($registro->idadeCliente) ? $registro->idadeCliente:old('idadeCliente')}}">
        @if ($errors->has('idadeCliente'))
        <span style="color: red">{{$errors->first('idadeCliente')}}</span>
        @endif  
      </div>
    </div><br>
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-success btn-lg">OK</a>
      </div>