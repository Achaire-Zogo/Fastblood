<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fast Blood | inscription</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script>
	function rolechoisi(){
		
			var select= document.getElementById("role_id");
			var val= select.options[select.selectedIndex].value;
			if (val==2) {
				document.getElementById("chBON").style.display="";
				document.getElementById("selectG").style.display="none";
				document.getElementById("select").style.display="none";
				document.getElementById("existe").style.display="none";
				document.getElementById("new").style.display="none";
				document.getElementById("oui").checked=false;
				document.getElementById("oui").required=true;
				document.getElementById("name_bank").required=false;
				document.getElementById("ouiEx").required=false;
				document.getElementById("address").required=false;
				document.getElementById("bank_id").required=false;
				document.getElementById("non").checked=false;
			}
			if(val==1){
				document.getElementById("chBON").style.display="none";
				document.getElementById("selectG").style.display="none";
				document.getElementById("select").style.display="none";
				document.getElementById("existe").style.display="none";
				document.getElementById("new").style.display="none";
				document.getElementById("oui").required=false;
				document.getElementById("oui").required=false;
				document.getElementById("name_bank").required=false;
				document.getElementById("ouiEx").required=false;
		document.getElementById("address").required=false;
		document.getElementById("bank_id").required=false;
				//document.getElementById("non").checked=true;
			}
			if(val==3){
				document.getElementById("selectG").style.display="";
				document.getElementById("chBON").style.display="none";
				document.getElementById("select").style.display="none";
				document.getElementById("existe").style.display="none";
				document.getElementById("new").style.display="none";
		document.getElementById("bank_idG").required=true;
		document.getElementById("oui").required=false;
				document.getElementById("name_bank").required=false;
				document.getElementById("ouiEx").required=false;
		document.getElementById("address").required=false;
		document.getElementById("bank_id").required=false;
			}
		
	}
	function mtn(){
		document.getElementById("existe").style.display="";
		document.getElementById("new").style.display="none";
		document.getElementById("name_bank").required=false;
		document.getElementById("address").required=false;
		document.getElementById("select").style.display="none";
		document.getElementById("bank_id").required=false;
		document.getElementById("ouiEx").checked=false;
		document.getElementById("ouiEx").required=true;
		document.getElementById("nonEx").checked=false;
	}
	function pasmtn(){
		document.getElementById("existe").style.display="none";
		document.getElementById("ouiEx").required=false;
		document.getElementById("new").style.display="none";
		document.getElementById("name_bank").required=false;
		document.getElementById("address").required=false;
		document.getElementById("select").style.display="none";
		document.getElementById("bank_id").required=false;
		document.getElementById("bank_id").value="";
		document.getElementById("name_bank").value="";
		document.getElementById("address").value="";
	}
	function existe(){
		document.getElementById("select").style.display="";
		document.getElementById("bank_id").required=true;
		document.getElementById("new").style.display="none";
		document.getElementById("name_bank").required=false;
		document.getElementById("address").required=false;
		document.getElementById("name_bank").value="";
		document.getElementById("address").value="";
	}
	function noExiste(){
		document.getElementById("new").style.display="";
		document.getElementById("name_bank").required=true;
		document.getElementById("address").required=true;
		document.getElementById("select").style.display="none";
		document.getElementById("bank_id").required=false;
		document.getElementById("bank_id").value="";
	}
</script>
</head>
<body>

<section style="background-image: url(img/bg-img/g3.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: contain; height: 100vh; background-position-x: 50vw;">

	<div class="col-lg-6 bg-white" style="height: 100vh; box-shadow: 0 5px 40px rgba(0, 0, 0, 0.15);">
		<div class="mx-auto text-center pt-4" style="height: 15%;"><a href="index-2.html"><img src="{{asset('img/logo.png')}}" style="height: 100px; width: 200px;" alt="" title="retour à l'acceuil | Fast blood"></a></div>
		<div class="mx-auto text-center mt-5">
			<h1 class="text-dark" style="font-weight: bold;">S'inscrire</h1>
		</div>
		<div class="mx-auto">
			<form style="margin-left: 40px;" action="signup" method="POST">
            @csrf
				<div class="row d-flex">
					<div class="col-6 mb-3">
						<label class="text-dark " style="text-align: right !important;">Nom</label><br/>
						<input type="text" name="name" placeholder="name" style="height: 45px; width: 80%;" class="border border-muted mb-3" id="name">
					</div>
					<div class="col-6 mb-3">
						<label class="text-dark " style="text-align: right !important;">Adresse email</label><br/>
						<input type="email" name="email" placeholder="email" style="height: 45px; width: 80%;" class="border border-muted mb-3" id="email">
					</div>
					<div class="col-6 mb-3">
						<label class="text-dark " style="text-align: right !important;">Numero de telephone</label><br/>
						<input type="tel" name="telephone" placeholder="telephone" style="height: 45px; width: 80%;" class="border border-muted mb-3" id="telephone">
					</div>
				
			
					<div class="col-6 mb-3">
						<label class="text-dark " style="text-align: right !important;">Mot de passe</label><br/>
						<input type="password" name="password" id="password" placeholder="********" style="height: 45px; width: 80%;" class="border border-muted mb-3">
					</div>
					
					<div class="col-6 mb-3">
						<label class="text-dark " style="text-align: right !important;">Confirmation de mot de passe</label><br/>
						<input type="password" name="password_confirmation" id="password_confirmation" placeholder="********" style="height: 45px; width: 80%;" class="border border-muted mb-3">
					</div>
					<div class="col-6 mb-3">
						<label class="text-dark " style="text-align: right !important;" for="role_id">Role</label><br/>
						<select onchange="rolechoisi();" name="role_id" id="role_id" style="height: 45px; width: 80%;" class="border border-muted mb-3">
						@foreach($role as $r)
               <option value="{{$r->id}}">{{$r->name}}</option>
               @endforeach
             </select>
            </div>
			<div class="col-6 mb-3" id="chBON" style="display: none;">
						<label class="text-dark " style="text-align: left !important;">Vous avez choisi le role de responsable. Voulez vous définir la banque de sang pour ce role?</label><br/>
						<input type="radio" name="defbanque" id="oui" value="oui" onclick="mtn();" class="border border-muted mb-3" >
						<label class="text-dark " style="text-align: right !important;" for="oui">Oui</label><br/>
						<input type="radio" name="defbanque" id="non" value="non" onclick="pasmtn();" class="border border-muted mb-3">
						<label class="text-dark " style="text-align: right !important;" for="non">Non. Plus tard</label><br/>
						
					</div>
					<div class="col-6 mb-3" id="existe" style="display: none;">
						<label class="text-dark " style="text-align: left !important;">La banque de sang existe t-elle deja?</label><br/>
					<input type="radio" name="banqueEx" id="ouiEx" value="oui" onclick="existe();" class="border border-muted mb-3"  >
						<label class="text-dark " style="text-align: right !important;" for="oui">Oui</label><br/>
						<input type="radio" name="banqueEx" id="nonEx" value="non" onclick="noExiste();" class="border border-muted mb-3">
						<label class="text-dark " style="text-align: right !important;" for="non">Non. Je veux la créer</label><br/>
						
					</div>
					<div class="col-6 mb-3" id="select" style="display: none;"> 
						<label class="text-dark " style="text-align: right !important;" for="bank_id">Selectionnez la banque de sang</label><br/>
						<select value="" name="bank_id" id="bank_id" style="height: 45px; width: 80%;" class="border border-muted mb-3">
						<option selected value=""></option>
						@foreach($bank as $b)
               <option value="{{$b->id}}">{{$b->name}}</option>
               @endforeach
             </select>
            </div>
			<div class="col-6 mb-3" id="new" style="display: none;">
						<label class="text-dark " style="text-align: right !important;">Nom banque de sang</label><br/>
						<input type="text" name="name_bank" placeholder="name_bank" style="height: 45px; width: 80%;" class="border border-muted mb-3" id="name_bank">
						<br><label class="text-dark " style="text-align: right !important;">Adresse</label><br/>
						<input type="text" name="address" placeholder="address" style="height: 45px; width: 80%;" class="border border-muted mb-3" id="address">
					
					</div>
					<div class="col-6 mb-3" id="selectG" style="display: none;"> 
						<label class="text-dark " style="text-align: left !important;" for="bank_idG">Selectionnez la banque de sang pour laquelle vous etes gestionnaire</label><br/>
						<select value="" name="bank_idG" id="bank_idG" style="height: 45px; width: 80%;" class="border border-muted mb-3">
						<option selected value=""></option>
						@foreach($bank as $b)
               <option value="{{$b->id}}">{{$b->name}}</option>
               @endforeach
             </select>
            </div>
				</div>
				
				
				<button type="submit" class="text-white text-uppercase mt-2 border-0 shadow p-2" style="background-color:#FE531D; width: 38%; border-start-start-radius: 1rem; border-end-end-radius: 1rem;">S'inscrire</button>
			</form>
		</div> 
		<div class="text-center mt-3">
			<p>Vous avez déjà un compte? <span><a href="{{ route('loginpage') }}">connectez-vous</a></span></p>
		</div>
	</div>
</section>

</body>
</html>
