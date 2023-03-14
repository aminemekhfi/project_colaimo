@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <h1>Les utulisateurs</h1>
        <h4><b>Nom complet :</b>{{ $User->name }}</h4>
        <h4><b>email :</b>{{ $User->email }}</h4>
        <h4><b>type :</b>{{ $User->type }}</h4>
        
    </div><br>
    <form>
        <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
      </form>
      <script type="text/javascript">
        function imprimer_page(){
          window.print();
        }
        </script>
</div>
@endsection