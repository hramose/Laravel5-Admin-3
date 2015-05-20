@extends('app')
@section('content')



@if(isset($duzenleData))

 <div class="container">
<div class="row">
          		<div class="col-md-10 col-md-offset-1">
          			<div class="panel panel-default">
          				<div class="panel-heading">Üye Düzenle</div>

<div class="panel-body">
<form action="{{url("/uyeler")}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="id" value="{{$duzenleData[0]->id}}">
    <input type="text" name="mail" value="{{$duzenleData[0]->mail}}">
    <input type="text" name="adi" value="{{$duzenleData[0]->adi}}">
    <input type="text" name="soyadi" value="{{$duzenleData[0]->soyadi}}">
    <input type="submit" value="Düzenle"/>
</form>



          				</div>
          			</div>
          		</div>
          	</div>
          	</div>
</div>
@endif




 <div class="container">
          	<div class="row">
          		<div class="col-md-10 col-md-offset-1">
          			<div class="panel panel-default">
          				<div class="panel-heading">Üye Listesi</div>

          				<div class="panel-body">

<ul class="nav navbar-nav">
    <li><a href="{{ url('uyeler/mailGonder') }}">Mail Gönder</a></li>
</ul>

                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Adı</th>
                                    <th>Soyadı</th>
                                    <th>Email</th>
                                    <th>Şifre</th>
                                    <th>Tarih</th>
                                    <th>Sil</th>
                                    <th>Düzenle</th>
                                  </tr>
                                </thead>
                                <tbody>

                           @if(isset($datalar))
                            @if (count($datalar) > 0)
                                @foreach($datalar as $key=>$val)
                                  <tr>
                                    <td>{{$val->adi}}</td>
                                    <td>{{$val->soyadi}}</td>
                                    <td>{{$val->mail}}</td>
                                    <td>{{$val->sifre}}</td>
                                    <td>{{$val->tarih}}</td>
                                    <td><a href="{{url("uyeler/sil/$val->id")}}">Sil</a> </td>
                                    <td><a href="{{url("uyeler/duzenle/$val->id")}}">Düzenle</a> </td>
                                  </tr>
                                  @endforeach
                            @endif
                            @endif






                                </tbody>
                              </table>
                            </div>



          			</div>
          		</div>
          	</div>
</div>



@endsection