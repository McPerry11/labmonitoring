@extends('_layout')

@section('body')

<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            Admin Setting
        </p>
    </header>
    <div class="card-content">
        <div class="content">
            <div class="field">
                <label class="label">Username</label>
                <div class="control">
                    <input class="input" type="text">
                </div>
            </div>
            <div class="field">
                <label class="label">Current Password</label>
                <div class="control">
                    <input class="input" type="password">
                </div>
            </div>
            <div class="field">
                <label class="label">New Password</label>
                <div class="control">
                    <input class="input" type="password">
                </div>
            </div>
            <div class="control">
                <button class="button is-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            Add Account
        </p>
    </header>
    <div class="card-content">
        <div class="content">
            <div class="field">
                <label class="label">Username</label>
                <div class="control">
                    <input class="input" type="text">
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email">
                </div>
            </div>
            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input" type="passowrd">
                </div>
            </div>
            <div class="control">
                <button class="button is-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<br>

<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button class="button">Edit</button>
            </td>
        </tr>

    </tbody>
</table>


@endsection
