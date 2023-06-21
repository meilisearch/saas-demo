@extends('layouts.table')

@section('title', 'Deals')

@section('sort')
    @php
        $sortingOptions = [['value' => 'deals:company_name:asc', 'label' => 'Sort by Company'], ['value' => 'deals:company_name:desc', 'label' => 'Sort by Company (descending)'], ['value' => 'deals:contact_name:asc', 'label' => 'Sort by Prospect'], ['value' => 'deals:contact_name:desc', 'label' => 'Sort by Prospect (descending)']];
    @endphp
    <search-sort-by :sorting-options="{{ Js::from($sortingOptions) }}"></search-sort-by>
@endsection

@section('search-bar')
    <search-bar placeholder="Search deals..."></search-bar>
@endsection

@section('table')
    <deal-list></deal-list>
@endsection
