@extends('layouts.admin')

@section('title', 'Profil Akun - Admin TezWorks')
@section('header', 'Pengaturan Profil')

@section('content')
<div class="space-y-8">
    <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-6 sm:p-8 shadow-xl shadow-brand-blue/5">
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-6 sm:p-8 shadow-xl shadow-brand-blue/5">
        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-6 sm:p-8 shadow-xl shadow-brand-blue/5">
        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
