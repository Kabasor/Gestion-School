<?php

use App\Models\Anneescolaire;
use App\Models\Classe;
use App\Models\FraisScolarite;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


if (!function_exists('page_title')) {
    function page_title($title)
    {
        $base_title = config('app.name');

        return empty($title) ? $base_title : $title . ' | ' . $base_title;
    }
}

if (!function_exists('page_active')) {
    function page_active($route)
    {
        return Route::is($route) ? ' active is-expanded' : '';
    }
}
if (!function_exists('page_is_expanded')) {
    function page_is_expanded($route)
    {
        return Route::is($route) ? ' is-expanded' : '';
    }
}
if (!function_exists('message_do_not_have_privilege_to_create')) {
    function message_do_not_have_privilege_to_create(string $contexte, string $action)
    {
        return "Vous ne disposez pas de privilège de " . $contexte . " un(une) " . $action;
    }
}

if (!function_exists('format_percent')) {
    function format_percent($number)
    {
        $number = number_format($number, 0) . ' %';
        return $number;
    }
}
if (!function_exists('format_price')) {
    function format_price($montant)
    {
        return number_format(($montant), 0, ', ', ' ') . Str::upper(' GNF');
    }
}

if (!function_exists('format_number')) {
    function format_number($number)
    {
        return (float) Str::replace(',', '', $number);
    }
}

if (!function_exists('get_users')) {
    function get_users()
    {
        return User::with(['user'])->where([['id', '>', 1]])->oldest('matricule')->get();
    }
}
if (!function_exists('get_comptable')) {
    function get_comptable()
    {
        return User::whereFonction(User::COMPTA)->first();
    }
}
if (!function_exists('get_classe')) {
    function get_classe($id)
    {
        return Classe::find($id);
    }
}

if (!function_exists('get_all_sessions')) {
    function get_all_sessions(): Collection
    {
        return Anneescolaire::latest()->get();
    }
}
if (!function_exists('get_last_session')) {
    function get_last_session(): Anneescolaire
    {
        return Anneescolaire::get()->last() ?? date('Y');
    }
}

if (!function_exists('get_last_session_id')) {
    function get_last_session_id(): int
    {
        return get_last_session()->id;
    }
}

if (!function_exists('get_last_session_fin_annee')) {
    function get_last_session_fin_annee(): int
    {
        return get_last_session()->session_annee_fin;
    }
}

if (!function_exists('get_frais_scolarite_classe')) {
    function get_frais_scolarite_classe($classe_id)
    {
        return FraisScolarite::whereRelation('classe', 'id', $classe_id)->first() ?? null;
    }
}
