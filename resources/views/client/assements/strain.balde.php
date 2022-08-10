@extends('layouts.client') @section('content')
<style>
    .cardhv:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        background-color: #d0dfed;
        cursor: pointer;
        color: white;
    }
</style>
<div class="container-fluid ">
	<nav>
		<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
			<li class="breadcrumb-item text-sm text-dark active" aria-current="page">
				<h6>Strains</h6></li>
		</ol>
	</nav>
</div>
@endsection
