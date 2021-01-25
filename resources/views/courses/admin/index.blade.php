@extends("layouts.menubar")
@extends("layouts.app")
@section("content")
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<div style="margin-right:0;float:right; border:1px solid black;width: 88%;height: 640px;">
		<table style="border:1px solid black; border-radius: 10%;margin: 4% 0px 0px 5%;">
			<tr><th>Courses</th></tr>
			<tr><td>Name</td></tr>
			<tr><td>Group</td></tr>
			<tr><td>Lecturer</td></tr>
			<tr><td>Language</td></tr>
			<tr><td>Start Date</td></tr>
			<tr><td>Remark</td></tr>
		</table>
	</div>
@endsection
