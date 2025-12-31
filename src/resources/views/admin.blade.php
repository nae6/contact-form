@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__header">
        <h2>問合せ内容一覧</h2>
    </div>
    <div class="faq-table">
        <table class="faq-table__inner">
            <tr class="faq-table__row">
                <th class="faq-table__header">ID</th>
                <th class="faq-table__header">問合せ日時</th>
                <th class="faq-table__header">内容</th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="faq-table__row">
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->content }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection