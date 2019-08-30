@extends('layouts.inc')
@section('content')
<section class="space-sm">
<div class="container">
<a href="/loanapplication/create" class="btn btn-outline-success"> Make Loan Request </a>
<a href="/home" class="btn btn-outline-success"> Dashboard</a><br><br>
<div class="row justify-content-between"><br><br>
<div class="col-12 col-md-12">
@if(@count($loanApps) > 0)
	@if(Auth::user()->id == $loanApps->user_id)
		@foreach($loanApps as $loanApp)
<div class="card">
<ul class="list-group list-group-flush list-group-comments">
<li class="list-group-item py-4">
<div class="media">
<img alt="Image" src="{{asset('img/avatar-bd.jpg')}}" class="avatar avatar-sm" />
<div class="media-body">
<div class="mb-2">
<span class="h6 mb-0"><font color="red">₦{{$loanApp->loanAmount}}</font> Loan Requested</span>
<span class="text-muted">Number {{$loanApp->id}} Loan Applied for</span>
</div>
<p align="justify">
Get a personal loan today to meet your daily needs, we have clear processes which helps you estimate your loan amount, interest rate and possible repayment plan considering your chosen tenure
</p>

<div class="alert alert-warning" role="alert">
<div>
&rsaquo; <a href="/loanapplication/{{$loanApp->id}}">View your Number {{$loanApp->id}} Loan </a>
</div>

<small class="text-muted">Date of Request: {{$loanApp->created_at}} By {{$loanApp->user->name}}</small>
</div>

<div class="d-flex align-items-center">
<div class="mr-2">
<a href="mailto:Support@tactika.com.ng" class="btn btn-sm btn-outline-primary">Support</a>
</div>
</div>
</div>
</div>

</li>
</ul>
</div>
@endforeach
{{$loanApps->links()}}
	@else
		<div class="alert alert-warning" role="alert">
		<div>
		&rsaquo; <a href="#">You have Not requested Loans</a>
		</div>
		@endif
	@endif
</div>

</div>
</section>
@endsection