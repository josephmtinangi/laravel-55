@extends('layouts.app')

@section('content')

<div class="jumbotron">
	<div class="container">
		<h1>Posts</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			@if($posts->count())
				<table class="table table-hover">
					<tbody>
						@php $i = 1 @endphp
						@foreach($posts as $post)
							<tr>
								<td>{{ $i++ }}.</td>
								<td>
									{{ $post-> title }}
									<div class="actions">
										<a href="#" class="btn btn-default btn-sm">Edit</a>
										<button type="button" class="btn btn-danger btn-sm delete-post" value="{{ $post->id }}">Delete</button>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
</div>

@endsection
