@extends('layout.layout')

@push('css')
<link type="text/css" rel="stylesheet" href="{{asset('css/quitanda.css')}}">
@endpush

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<h1 class="display-1">Quitanda</h1>
	</div>
	<div class="row justify-content-center">
		<div class="hr-sect">
			<p class="h4">Ofertas da Semana</p>
		</div>
	</div>
	<div class="row mt-3 mb-3">
		<img src="{{asset('img/mega-oferta.png')}}" class="img-responsive w-100" alt="Mega Oferta">
		<p class="text-right w-100">Manga Palmer | Kg | <b>R$ 3,99</b></p>
	</div>
	<div class="row justify-content-center">
		<div class="arrow-left h-100"></div>
		<div class="box-title w-80"><p class="h2">Risoto de Manga e Brie</p></div>
		<div class="arrow-right h-100"></div>
	</div>
	<div class="row">
		<h5 class="border-bottom border-dark w-100 mt-3 pb-2">Ingredientes</h5>
		<div class="col-12 col-md-6">
			<ul class="mb-0">
				<li>3/4 xícara (chá) de arroz arbóreo</li>
				<li>1 litro de água de caldo de legumes</li>
				<li>1 dente de alho amassado</li>
				<li>1/2 cebola picada</li>
				<li>1 colher (sopa) de manteiga</li>
				<li>1 colher (sopa) de azeite de oliva extra virgem</li>
			</ul>
		</div>
		<div class="col-12 col-md-6">
			<ul>
				<li>Sal e pimenta do reino preta moída a gosto</li>
				<li>1 cálice de vinho branco seco</li>
				<li>1/2 unidade de manga palmer descascada e picada</li>
				<li>100g de queijo brie</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<h5 class="border-bottom border-dark w-100 mt-3 pb-2">Preparo</h5>
		<div class="col">
			<ul>
				<li>Em uma panela, coloque o azeite e a manteiga, deixe aquecer e doure a cebola e o alho.</li>
				<li>Junte então o arroz arbóreo e refogue, acrescentando em seguida o cálice de vinho. Mexa bem até o vinho evaporar.</li>
				<li>Vá colocando o caldo de legumes aos poucos, mexendo sempre, até obter a consistência "al dente", ideal para o risoto.</li>
				<li>Junte o queijo brie cortado em cubinhos e mexa até este derreter. Desligue o fogo, acrescente as mangas cortadas em cubos, mexa para incorporar sirva em seguida.</li>
			</ul>
		</div>
	</div>
</div>

<div class="bg-light">
	<div class="container pt-3 pb-3">
		<div class="row">
			<div class="col-12 col-md-3 pl-0">
				<h3>Hortifrúti</h3>
			</div>
			<div class="col-12 col-md-9 pr-0">
				<p>Buscamos e selecionamos o que há de melhor na roça e no campo para que possamos oferecer frutas, legumes e verduras sempre fresquinhos, nutritivos e saborosos.</p>
			</div>
		</div>
		<div class="row" ng-init="list('hortifruti', 1)" ng-model="category.hortifruti">
			<div class="col-12 col-sm-6 col-md-3" ng-repeat="h in category.hortifruti.data">
				<a class="a-card" href="@{{h.url}}" target="_blank">
					<div class="card mt-2 mb-2">
						<img class="card-img-top align-self-center" src="@{{h.image}}" ng-if="h.image" />
						<img class="card-img-top align-self-center" src="https://d3o3bdzeq5san1.cloudfront.net/22/21584.svg" ng-if="!h.image" />
						<div class="card-body">
							<p class="card-text text-right mt-0 mb-0">@{{h.name}}</p>
							<p class="card-text text-right mt-0 mb-0"><b>R$ @{{h.price}}</b></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center" ng-model="category.hortifruti">
			<a class="mr-3 ml-3" ng-click="list('hortifruti', category.hortifruti.previousPage)"><span class="fa fa-chevron-circle-left fa-2x" /></a> 
			<a class="mr-3 ml-3" ng-click="list('hortifruti', category.hortifruti.nextPage)"><span class="fa fa-chevron-circle-right fa-2x" /></a> 
		</div>
	</div>
</div>

<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-12 col-md-3 pl-0">
			<h3>Bebidas</h3>
		</div>
		<div class="col-12 col-md-9 pr-0">
			<p>Nossa adega oferece rótulos de vinhos super especiais a preços convidativos. As cervejas e os destilados também têm seu espaço. Além de sucos orgânicos direto da fazenda. Pesquisamos e degustamos muito para oferecer verdadeiros achados a quem quiser experimentar. Deguste conosco.</p>
		</div>
	</div>
	<div class="row" ng-init="list('bebida', 1)" ng-model="category.bebida">
		<div class="col-12 col-sm-6 col-md-3" ng-repeat="h in category.bebida.data">
			<a class="a-card" href="@{{h.url}}" target="_blank">
				<div class="card bg-light mt-2 mb-2">
					<img class="card-img-top align-self-center" src="@{{h.image}}" ng-if="h.image" />
					<img class="card-img-top align-self-center" src="https://d3o3bdzeq5san1.cloudfront.net/22/21588.svg" ng-if="!h.image" />
					<div class="card-body">
						<p class="card-text text-right mt-0 mb-0">@{{h.name}}</p>
						<p class="card-text text-right mt-0 mb-0"><b>R$ @{{h.price}}</b></p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="row justify-content-center" ng-model="category.bebida">
		<a class="mr-3 ml-3" ng-click="list('bebida', category.bebida.previousPage)"><span class="fa fa-chevron-circle-left fa-2x" /></a> 
		<a class="mr-3 ml-3" ng-click="list('bebida', category.bebida.nextPage)"><span class="fa fa-chevron-circle-right fa-2x" /></a> 
	</div>
</div>

<div class="bg-light">
	<div class="container pt-3 pb-3">
		<div class="row">
			<div class="col-12 col-md-3 pl-0">
				<h3>Carnes e Peixes</h3>
			</div>
			<div class="col-12 col-md-9 pr-0">
				<p>Uma grande diversidade de cortes, manipulados sob rigoroso padrão de qualidade, para oferecer sempre o produto perfeito.</p>
			</div>
		</div>
		<div class="row" ng-init="list('carne', 1)" ng-model="category.carne">
			<div class="col-12 col-sm-6 col-md-3" ng-repeat="h in category.carne.data">
				<a class="a-card" href="@{{h.url}}" target="_blank">
					<div class="card mt-2 mb-2">
						<img class="card-img-top align-self-center" src="@{{h.image}}" ng-if="h.image" />
						<img class="card-img-top align-self-center" src="https://d3o3bdzeq5san1.cloudfront.net/22/21590.svg" ng-if="!h.image" />
						<div class="card-body">
							<p class="card-text text-right mt-0 mb-0">@{{h.name}}</p>
							<p class="card-text text-right mt-0 mb-0"><b>R$ @{{h.price}}</b></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center" ng-model="category.carne">
			<a class="mr-3 ml-3" ng-click="list('carne', category.carne.previousPage)"><span class="fa fa-chevron-circle-left fa-2x" /></a> 
			<a class="mr-3 ml-3" ng-click="list('carne', category.carne.nextPage)"><span class="fa fa-chevron-circle-right fa-2x" /></a> 
		</div>
	</div>
</div>

<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-12 col-md-3 pl-0">
			<h3>Empório</h3>
		</div>
		<div class="col-12 col-md-9 pr-0">
			<p>Uma seleção de ingredientes especiais e temperos, para dar vida às suas criações culinárias. Escolha entre uma grande variedade de itens como mel trufado, azeite extravirgem, massas italianas e especiarias, e deixe suas receitas ainda mais gostosas.</p>
		</div>
	</div>
	<div class="row" ng-init="list('emporio', 1)" ng-model="category.emporio">
		<div class="col-12 col-sm-6 col-md-3" ng-repeat="h in category.emporio.data">
			<a class="a-card" href="@{{h.url}}" target="_blank">
				<div class="card bg-light mt-2 mb-2">
					<img class="card-img-top align-self-center" src="@{{h.image}}" ng-if="h.image" />
					<img class="card-img-top align-self-center" src="https://d3o3bdzeq5san1.cloudfront.net/22/21586.svg" ng-if="!h.image" />
					<div class="card-body">
						<p class="card-text text-right mt-0 mb-0">@{{h.name}}</p>
						<p class="card-text text-right mt-0 mb-0"><b>R$ @{{h.price}}</b></p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="row justify-content-center" ng-model="category.emporio">
		<a class="mr-3 ml-3" ng-click="list('emporio', category.emporio.previousPage)"><span class="fa fa-chevron-circle-left fa-2x" /></a> 
		<a class="mr-3 ml-3" ng-click="list('emporio', category.emporio.nextPage)"><span class="fa fa-chevron-circle-right fa-2x" /></a> 
	</div>
</div>

<div class="bg-light">
	<div class="container pt-3 pb-3">
		<div class="row">
			<div class="col-12 col-md-3 pl-0">
				<h3>Diversos</h3>
			</div>
			<div class="col-12 col-md-9 pr-0">
				<p>Uma grande diversidade de cortes, manipulados sob rigoroso padrão de qualidade, para oferecer sempre o produto perfeito.</p>
			</div>
		</div>
		<div class="row" ng-init="list('diverso', 1)" ng-model="category.diverso">
			<div class="col-12 col-sm-6 col-md-3" ng-repeat="h in category.diverso.data">
				<a class="a-card" href="@{{h.url}}" target="_blank">
					<div class="card mt-2 mb-2">
						<img class="card-img-top align-self-center" src="@{{h.image}}" ng-if="h.image" />
						<img class="card-img-top align-self-center" src="https://d3o3bdzeq5san1.cloudfront.net/22/21597.svg" ng-if="!h.image" />
						<div class="card-body">
							<p class="card-text text-right mt-0 mb-0">@{{h.name}}</p>
							<p class="card-text text-right mt-0 mb-0"><b>R$ @{{h.price}}</b></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center" ng-model="category.diverso">
			<a class="mr-3 ml-3" ng-click="list('diverso', category.diverso.previousPage)"><span class="fa fa-chevron-circle-left fa-2x" /></a> 
			<a class="mr-3 ml-3" ng-click="list('diverso', category.diverso.nextPage)"><span class="fa fa-chevron-circle-right fa-2x" /></a> 
		</div>
	</div>
</div>
@endsection