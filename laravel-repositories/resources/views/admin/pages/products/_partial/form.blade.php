@csrf
<div class="form-group">
    <input class="form-control" type="text" name="name" id="name" placeholder="Nome: "
           value="{{$product->name ?? old('name')}}">
</div>

<div class="form-group">
    <input class="form-control" type="text" name="price" placeholder="Valor"
           value="{{$product->price ?? old('price')}}">
</div>

<div class="form-group">
    <input class="form-control" type="text" name="description" placeholder="Descrição"
           value="{{$product->description ?? old('description')}}">
</div>
<br>
<br>
<div class="form-group">
    <input class="form-control" type="file" name="image">
</div>
<br>
<br>
