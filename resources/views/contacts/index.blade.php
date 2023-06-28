@extends('layouts.table')

@section('title', 'Contacts')

@section('sort')
    @php
        $sortingOptions = [['value' => 'contacts:name:asc', 'label' => 'Sort by Name'], ['value' => 'contacts:name:desc', 'label' => 'Sort by Name (descending)'], ['value' => 'contacts:company_name:asc', 'label' => 'Sort by Company'], ['value' => 'contacts:company_name:desc', 'label' => 'Sort by Company (descending)']];
    @endphp
    <search-sort-by :sorting-options="{{ Js::from($sortingOptions) }}"></search-sort-by>
@endsection

@section('search-bar')
    <search-bar placeholder="Search contacts..."></search-bar>
@endsection

@section('table')
    <contact-list></contact-list>
@endsection
