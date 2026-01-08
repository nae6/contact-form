@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>お問い合わせ内容詳細</h2>
    </div>

    <div class="confirm-table">
        <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お名前</th>
                <td class="confirm-table__text">{{ $contact->name }}</td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">メールアドレス</th>
                <td class="confirm-table__text">{{ $contact->email }}</td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">電話番号</th>
                <td class="confirm-table__text">{{ $contact->tel }}</td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問合せ時刻</th>
                <td class="confirm-table__text">{{ $contact->created_at }}</td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせ内容</th>
                <td class="confirm-table__text">{{ $contact->content }}</td>
            </tr>
        </table>
    </div>

    <div class="return">
        <a class="return__a" href="{{ route('admin') }}">戻る</a>
    </div>
</div>
@endsection