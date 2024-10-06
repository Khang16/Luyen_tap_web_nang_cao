@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>
    <p>Name: {{ $customer->fullname }}</p>
    <p>Email: {{ $customer->email }}</p>
    <p>Phone: {{ $customer->phone }}</p>
    <p>Image: {{ $customer->image }}</p>
@endsection
