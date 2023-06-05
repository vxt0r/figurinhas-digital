    @csrf
    <label>Imagem do jogador:</label>
    <input type="file" name="foto" class="input-file">
    
    <label>Nome</label>
    <input name="nome" type="text" value="{{$jogador->nome ?? ''}}">

    <label>Time</label>
    <input name="time" type="text"  value="{{$jogador->time ?? ''}}">

    <label>Posição</label>
    <input name="posicao" type="text"  value="{{$jogador->posicao ?? ''}}">

    <label>Altura</label>
    <input name="altura" type="text"  value="{{$jogador->altura ?? ''}}">

    <button type="submit">@yield('acao')</button>
</form>
</div> 
<div class="div-link">
    <a href="{{ route('app.index')}}">Voltar</a>
</div>

    