@extends('welcome')
@section('hom')

        <h1 class="titre">bienvenue au restau du coeur, chez nous le client est roi </h1> 
        <div class="image">
            <div class="a">        
                <img  src="{{url('image/re.jpg')}}">
                <p class="b">pasta</p>
            </div>
            <div class="a"> 
                <img  src="{{url('image/res.jpg')}}">
                <p class="b">hamburger</p>
            </div>
            <div class="a">
                <img  src="{{url('image/rest.jpg')}}">
                <p class="b">boisson fraiche</p>
            </div>
            <div class="a">
                <img  src="{{url('image/resta.jpg')}}">
                <p class="b">pizza</p>
            </div>

           
            <div class="a">
                <img  src="{{url('image/thie.jpg')}}" class="d">
                    <p class="e"> thiébou dieune</p>
            </div>

            <div class="a">
                <img  src="{{url('image/gl.jpg')}}" class="d">
                    <p class="e">glace</p>
            </div>
            
        </div> 
        
           

@endsection