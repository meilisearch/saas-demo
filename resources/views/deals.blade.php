@extends('layouts.table')

@section('title', 'Deals')

@section('filter')
    <search-filter-menu attribute="status" />
@endsection

@section('sort')
    @php
        $sortingOptions = [['value' => 'deals:company_name:asc', 'label' => 'Sort by Company'], ['value' => 'deals:company_name:desc', 'label' => 'Sort by Company (descending)'], ['value' => 'deals:status:asc', 'label' => 'Sort by Status'], ['value' => 'deals:status:desc', 'label' => 'Sort by Status (descending)'], ['value' => 'deals:value:asc', 'label' => 'Sort by Value'], ['value' => 'deals:value:desc', 'label' => 'Sort by Value (descending)']];
    @endphp
    <search-sort-by :sorting-options="{{ Js::from($sortingOptions) }}"></search-sort-by>
@endsection

@section('search-bar')
    <search-bar placeholder="Search deals..."></search-bar>
@endsection

@section('table')
    <deal-list></deal-list>
@endsection
