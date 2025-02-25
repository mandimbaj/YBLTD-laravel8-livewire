<?php

use Illuminate\Support\Str;



function userFullName()
{
    return auth()->user()->prenom. " " . auth()->user()->nom;


}

function setMenuClasse($route, $classe)
{
    $routeActuelle = request()->route()->getName();
    if (contains($routeActuelle, $route))
    {
        return $classe;
    }
    return "";
}

function setMenuActive($route)
{
    $routeActuelle = request()->route()->getName();
    if ($routeActuelle === $route) {
        return "active";
    }
    return "";
}

function contains($container, $contenu)
{
    return Str::contains($container, $contenu);
}

function getRolesName()
{
    $rolesName = "";
    $i = 0;
        foreach(auth()->user()->roles as $role)
        {
            $rolesName .= $role->nom;

            if ($i < sizeof(auth()->user()->roles) - 1)
            {
                $rolesName .= " , ";
            }
            $i++;
        }
        return $rolesName;
}

